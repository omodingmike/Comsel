<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Course extends Model
    {
        use HasFactory;

        public $timestamps = false;

        public static function allCourses()
        : array
        {
            $array = [];
            foreach (Course::all(['name', 'code']) as $course) {
                $array[] = $course;
            }
            return $array;
        }

        public static function requirements(int $code)
        {
            $subjects['essentials'] = Course::where('code', "${code}")->first()->essentials;
            $subjects['relevants']  = Course::where('code', "${code}")->first()->relevants;
            $subjects['desirables'] = Course::where('code', "${code}")->first()->desirables;
//            $essentials = Course::where("${code}", 100)->first()->essentials;
//            foreach ($essentials as $essential) {
//                echo $essential->subject->name;
//
//            }

//            $relevants = Course::where("${code}", 100)->first()->relevants;
//            foreach ($relevants as $relevant) {
//                echo $relevant->subject->name;
//            }
//            $desirables = Course::where("${code}", 100)->first()->desirables;
//            foreach ($desirables as $desirable) {
//                echo $desirable->subject->name;
//            }
            return $subjects;
        }

        public function essentials()
        {
            return $this->hasMany(EssentialSubject::class, 'course_code', 'code');
        }

        public function desirables()
        {
            return $this->hasMany(DesirableSubject::class, 'course_code', 'code');
        }

        public function relevants()
        {
            return $this->hasMany(RelevantSubject::class, 'course_code', 'code');
        }
    }
