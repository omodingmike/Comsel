<?php

    namespace App\Helpers;

    use App\Http\Controllers\UaceWeightController;
    use App\Models\Candidate;
    use App\Models\Course;
    use App\Models\PleResult;
    use App\Models\UaceResult;
    use App\Models\UaceSubjects;
    use App\Models\UceResult;
    use App\Models\UceSubject;
    use Illuminate\Http\Request;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Schema;

    class Operation
    {
        /**
         * @throws \Exception
         */
        public static function combinations(Request $request)
        : array
        {
            // data array to be returned to the view
            $data = [];
            // get uce results from request
            $uce_results = $request['uce'];
            // get ple results from request.
            $ple_results = $request['ple'];
            // save uce results and get aggregates then add them to data array
            $data['uce_aggregates'] = self::uceResults($uce_results);
            // add candidate biodata to data array
            $data['biodata'] = Candidate::where('user_id', Auth::user()->id)->first();
            // add science subjects to data array
            $data['sciences'] = self::scienceSubjects($uce_results);
            // add arts subjects to data array
            $data['arts'] = self::artsSubjects($uce_results);
            // add ple aggregates to data array
            $data['ple_aggregates'] = Operation::pleAggregates($ple_results);
            // returning data array
            return $data;
        }

        public static function uceResults(array $request)

        {
            // columns to be excluded from uce results table
            $excluded = ['id', 'user_id', 'created_at', 'updated_at'];
            // reset all subjects in uce results table
            foreach (Schema::getColumnListing('uce_results') as $col) {
                if (!(in_array($col, $excluded))) {
                    UceResult::where('user_id', '=', Auth::user()->id)
                        ->update([
                            "${col}" => 0
                        ]);
                }
            }
            // update uce results
            foreach ($request as $subject => $grade) {
                $subj = UceSubject::where('user_id', '=', Auth::user()->id)->first()->$subject;
                UceResult::where('user_id', '=', Auth::user()->id)
                    ->update([
                        "${subject}" => $grade
                    ]);
            }


            // calculate uce aggregates
            $grades     = [];
            $aggregates = 0;
            foreach ($request as $subject => $grade) {
                $grades[] = $grade;
            }
            sort($grades);
            for ($i = 0; $i < 8; $i++) {
                $aggregates += $grades[$i];
            }
            return $aggregates;

        }

        public static function scienceSubjects(array $results)
        : array
        {
            $scienceSubjects = [
                'mathematics', 'chemistry', 'biology', 'physics', 'geography', 'agriculture', 'technical_drawing', 'economics',
                'entrepreneurship'
            ];

            $sciences = [];
            foreach ($results as $subject => $grade) {
                if (in_array($subject, $scienceSubjects) and $grade <= 5) {
                    $sciences[] = $subject;
                }
            }
            if (array_key_exists('commerce', $results) and $results['commerce'] <= 5) {
                $sciences[] = 'entrepreneurship';
                $sciences[] = 'economics';
            }
            return $sciences;
        }

        public static function artsSubjects(array $results)
        : array
        {
            $artSubjects = [
                'history', 'economics', 'geography', 'entrepreneurship', 'luganda', 'literature in english', 'kiswahili', 'divinity',
                'islam', 'arabic', 'art_ips'
            ];

            $subjects = [];
            foreach ($results as $subject => $grade) {
                if (in_array($subject, $artSubjects) and $grade < 8) {
                    $subjects[] = $subject;
                }
            }
            if (array_key_exists('commerce', $results) and $results['commerce'] < 8) {
                $subjects[] = 'entrepreneurship';
                $subjects[] = 'economics';
            }
            if (array_key_exists('cre', $results) and $results['cre'] < 8) {
                $subjects[] = 'divinity';

            }
            return $subjects;
        }

        public static function pleAggregates(array $results)
        {
            // save ple results
            PleResult::where('user_id', '=', Auth::user()->id)
                ->update([
                    'maths'   => $results['maths'],
                    'science' => $results['science'],
                    'english' => $results['eng'],
                    'sst'     => $results['sst']
                ]);

            // calculate total ple aggregates
            $aggregates = 0;
            foreach ($results as $subject => $grade) {
                $aggregates += $grade;
            }

            return $aggregates;
        }

        public static function pleResults(array $results)
        {
            PleResult::where('user_id', '=', Auth::user()->id)
                ->update([
                    'maths'   => $results['maths'],
                    'science' => $results['science'],
                    'english' => $results['eng'],
                    'sst'     => $results['sst']
                ]);
        }

        public static function uceSubjectGrade()
        : array
        {
            $exclude       = ['id', 'user_id', 'created_at', 'updated_at'];
            $data          = Arr::except(UceSubject::where('user_id', '=', Auth::user()->id)->first()->toArray(), $exclude);
            $subject_grade = [];
            foreach ($data as $key => $value) {
                if (!empty($value) and strlen($value) != 0 and strlen($value) != 1) {
                    $grade                     = UceResult::where('user_id', '=', Auth::user()->id)->first()->$value;
                    $subject_grade["${value}"] = $grade;
                }
            }
            return $subject_grade;
        }

        public static function uaceSubjectsWithGrades()
        : array
        {
            // columns to be excluded
            $exclude = ['id', 'user_id', 'created_at', 'updated_at'];
            // get all uace subjects for the current user.
            $data = Arr::except(UaceSubjects::where('user_id', '=', Auth::user()->id)->first()->toArray(), $exclude);
            // array to store subjects and their grades
            $subjects_grade = [];
            // populate subjects grade array.
            foreach ($data as $key => $value) {
                if (!empty($value) and strlen($value) != 0 and strlen($value) != 1) {
                    // getting grade for each subject
                    $grade                      = UaceResult::where('user_id', '=', Auth::user()->id)->first()->$value;
                    $subjects_grade["${value}"] = $grade;
                }
            }

            return $subjects_grade;
        }

        /**
         * @throws \Exception
         */
        public static function weight(Request $request)
        : array
        {
            // get selected course code
            $course = $request->course;
            // response data array
            $data         = [];
            $uce_results  = $request['uce'];
            $uace_results = $request['uace'];
            // get uce results
            $data['uce_aggregates'] = self::uceResults($uce_results);
            //get uace results
            $data['results'] = $uce_results;
            // get candidate biodata
            $data['biodata'] = Candidate::where('user_id', Auth::user()->id)->first();
            // get uace results
            $data['alevel_results'] = self::uaceResults($uace_results);
            // get all science subjects
            $data['sciences'] = self::scienceSubjects($uce_results);
            // get all essentials for selected course
            $data['essentials'] = self::essentials($course);
            // get all desirables for selected course
            $data['desirables'] = self::desirables($course);
            // get course full name based on code
            $data['course'] = Course::where('code', $course)->first()->name;
            // get all the relevants for the selected course
            $data['relevants'] = self::relevants($course);
            // get all arts subjects
            $data['arts'] = self::artsSubjects($uace_results);
            // get uace points
            $data['points'] = UaceWeightController::points($uace_results);
            // get weight of uace results
            $data['weight'] = self::calculateWeight($course, $request);

            return $data;
        }

        public static function uaceResults(array $result)
        : array
        {
            $excluded = ['id', 'user_id', 'created_at', 'updated_at'];
            $results  = [];
            foreach (Schema::getColumnListing('uace_results') as $col) {
                if (!(in_array($col, $excluded))) {
                    UaceResult::where('user_id', '=', Auth::user()->id)
                        ->update([
                            "$col" => 0
                        ]);
                }
            }
            $grades = ['A' => 6, 'B' => 5, 'C' => 4, 'D' => 3, 'E' => 2, 'O' => 1, 'F' => 0];

            foreach ($result as $k => $v) {

                $column             = Clean::aLevel($k);
                $results["$column"] = (is_numeric($v)) ? $v : $grades[$v];
                UaceResult::where('user_id', '=', Auth::user()->id)
                    ->update([
                        "$column" => (is_numeric($v)) ? $v : $grades[$v]
                    ]);


            }
            return $results;
        }

        public static function essentials(int $code)
        : array
        {
            $array      = [];
            $essentials = Course::where('code', "${code}")->first()->essentials;
            foreach ($essentials as $essential) {
                $array[] = $essential->subject->name;
            }
            return $array;

        }

        public static function desirables(int $code)
        : array
        {
            $array      = [];
            $desirables = Course::where('code', "${code}")->first()->desirables;
            foreach ($desirables as $desirable) {
                $array[] = $desirable->subject->name;
            }
            return $array;

        }

        public static function relevants(int $code)
        : array
        {
            $array     = [];
            $relevants = Course::where('code', "${code}")->first()->relevants;
            foreach ($relevants as $relevant) {
                $array[] = $relevant->subject->name;
            }
            return $array;

        }

        public static function calculateWeight(int $code, Request $request)
        {
            // get all results
            $uce_results  = $request['uce'];
            $uace_results = $request['uace'];
            $weight       = 0;
            // calculate weight from a level results
            foreach ($uace_results as $key => $value) {
                if ((in_array($key, self::essentials($code)))) {
                    $weight += ($value * 3);
                } elseif (in_array($key, self::relevants($code))) {
                    $weight += ($value * 2);
                } elseif (in_array($key, self::desirables($code))) {
                    if ($value <= 6) {
                        $weight += 1;
                    }
                }
            }
            // calculate weight from o level results.
            foreach ($uce_results as $subject => $grade) {
                switch ($grade) {
                    case 1:
                    case 2:
                        $weight += 0.3;
                        break;
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        $weight += 0.2;
                        break;
                    case 7:
                    case 8:
                        $weight += 0.1;
                        break;
                    default:
                        $weight += 0.0;
                }
            }
            return $weight;
        }

        public static function rowCount(array $relevants, array $desirables, array $essentials)
        {
            return max(count($essentials), count($relevants), count($desirables));
        }

        /**
         * @throws \Exception
         */
        public static function candidateBioData(array $biodata)
        {
            Candidate::where('user_id', '=', Auth::user()->id)
                ->update([
                    'fname'  => $biodata['fname'],
                    'mname'  => (empty($mname)) ? '' : $mname,
                    'lname'  => $biodata['lname'],
                    'gender' => $biodata['gender'],
                    'dob'    => Utilities::dbDate($biodata['dob'])
                ]);

        }

    }
