<?php

    namespace App\Helpers;

    use App\Models\UaceResult;
    use App\Models\UaceSubjects;
    use App\Models\UceResult;
    use App\Models\UceSubject;
    use Illuminate\Http\Request;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Facades\Auth;

    class Subjects
    {
        public static function subjects()
        : array
        {
            return [
                'Mathematics',
                'Physics',
                'Biology',
                'Chemistry',
            ];

        }

        public static function options()
        : array
        {
            return [
                'entrepreneurship', 'commerce', 'luganda', 'agriculture', 'french', 'germany',
                'literature in english', 'kiswahili', 'cre', 'accounts', 'technical_drawing',
                'islam', 'arabic', 'political education', 'computer studies', 'art_ips'
            ];

        }

        public static function subsidiaries()
        : array
        {

            return [
                'subsidiary_mathematics', 'subsidiary_ict'];

        }

        public static function allOlevelSubjects()
        : array
        {

            return [
                'chemistry', 'mathematics', 'physics', 'geography', 'agriculture', 'history', 'kiswahili', 'commerce',
                'technical drawing', 'economics', 'entrepreneurship', 'history', 'luganda', 'cre', 'accounts',
                'islam', 'arabic', 'political education', 'computer studies', 'art_ips', 'literature in english', 'french',
                'germany'
            ];
        }

        public static function allAlevelSubjects()
        : array
        {

            return [
                'chemistry', 'mathematics', 'biology', 'physics', 'geography', 'agriculture', 'history', 'kiswahili', 'divinity',
                'technical_drawing', 'economics', 'entrepreneurship', 'luganda',
                'islam', 'arabic', 'art_ips', 'literature_in_english', 'french',
                'germany'
            ];
        }

        public static function compulsory()
        : array
        {
            return [
                'Mathematics', 'English', 'Chemistry', 'Biology', 'Physics', 'History', 'Geography'
            ];
        }

        public static function grades()
        : array
        {
            return [
                'D1' => 1,
                'D2' => 2,
                'C3' => 3,
                'C4' => 4,
                'C5' => 5,
                'C6' => 6,
                'P7' => 7,
                'P8' => 8,
                'F9' => 9,

            ];
        }

        public static function AlevelGrades(string $subject)
        : array
        {
            $array1 = [
                'A' => 6,
                'B' => 5,
                'C' => 4,
                'D' => 3,
                'E' => 2,
                'O' => 1,
                'F' => 0,

            ];
            $array2 = [
                'D1' => 1,
                'D2' => 1,
                'C3' => 1,
                'C4' => 1,
                'C5' => 1,
                'C6' => 1,
                'P7' => 0,
                'P8' => 0,
                'F9' => 0,
            ];
            switch ($subject) {
                case 'subsidiary_mathematics':
                case 'subsidiary_ict':
                case 'general_paper':
                    return $array2;
                default:
                    return $array1;

            }

        }

        public static function fetch_all()
        {
            $columns  = ['subj_1', 'subj_2', 'subj_3', 'subj_4', 'subj_5', 'subj_6', 'subj_7', 'optional_1', 'optional_2', 'optional_3'];
            $subjects = UceSubject::where('user_id', '=', Auth::user()->id)
                ->first($columns);
//            return empty($subjects) ? [] : $subjects[0];
            return empty($subjects) ? [] : $subjects->toArray();
//            return $subjects;
//            $uce_results = UceResult::where('user_id', '=', Auth::user()->id)->get();
//            return $uce_results;
        }

        public static function test(Request $request)
        {
            //physics [1] => mathematics [2] => chemistry [3] => biology [4] => geography [5] => agriculture [6] => entrepreneurship [7] => economics
            $array = ['mathematics', 'chemistry', 'biology', 'geography', 'agriculture', 'entrepreneurship', 'economics'];

            return Utilities::combinationsToJson(Combination::sciences($array));
        }

        public static function fetchSelectedSubjects()
        : array
        {
            $exclude = ['created_at', 'updated_at', 'id', 'user_id'];

            $uce_results = UceResult::where('user_id', '=', Auth::user()->id)->get()->first()->toArray();
            $filtered    = [];
            foreach (Arr::except($uce_results, $exclude) as $key => $value) {
                if ((int)$value !== 0) {
                    $filtered[] = ["${key}" => $value];
                }
            }

            return $filtered;

        }

        public static function fetchAlevelSubjects()
        : array
        {
            $data         = [];
            $uaceSubjects = UaceSubjects::where('user_id', '=', Auth::user()->id)
                ->first(['subj_1', 'subj_2', 'subj_3', 'subsidiary', 'gp'])->toArray();
            foreach ($uaceSubjects as $value) {
                if (empty($value) or strlen($value) == 1) {
                    continue;
                } else {
//                    $data[] = $value;
                    $data["$value"] = UaceResult::where('user_id', '=', Auth::user()->id)
                        ->first()->$value;
                }

            }
//            foreach ($data as $k => $v) {
//                info($k . ':' . $v);
//
//            }


            return $data;
        }

        public static function fetch_options()
        {
            $columns = ['optional_1', 'optional_2', 'optional_3'];
            $values  = [];
            $options = UceSubject::where('user_id', '=', Auth::user()->id)
                ->get($columns)->first()->toArray();
            foreach ($options as $key => $value) {
                array_push($values, $value);
            }
            return $values;
        }

        public static function getGrade(string $subject)
        {
            $result = UceResult::where('user_id', '=', Auth::user()->id)->first();
            $grade  = 0;
            switch ($subject) {
                case 'entrepreneurship';
                    if ($result->entrepreneurship == 0) {
                        $grade = $result->commerce;
                    } else {
                        $grade = $result->entrepreneurship;
                    }
                    break;
                case 'economics';
                    $grade = $result->commerce;
                    break;
                default;
                    $grade = $result->$subject;
                    break;
            }

            return $grade;

        }

        public static function getAlevelGrade(string $subject)
        : string
        {
            $grades = [6 => 'A', 5 => 'B', 4 => 'C', 3 => 'D', 2 => 'E', 1 => 'O', 9 => 'F', 0 => 'F'];
            $grade  = UaceResult::where('user_id', '=', Auth::user()->id)->first()->$subject;
            switch (strtolower($subject)) {
                case 'subsidiary_mathematics':
                case 'subsidiary_ict':
                case 'general_paper':
                    return $grade;
                default:
                    return $grades[$grade];

            }

        }

        public static function gradeWeight($grade)
        {

        }

        public function ple()
        : array
        {

            return [
                'Mathematics', 'English', 'Science', 'Social studies'
            ];
        }

    }
