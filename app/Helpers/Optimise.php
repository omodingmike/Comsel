<?php

    namespace App\Helpers;


    use App\Models\Candidate;
    use App\Models\EssentialSubject;
    use App\Models\User;
    use Illuminate\Support\Facades\Artisan;

    class Optimise
    {
        public function route()
        {

            Artisan::call('migrate:refresh');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
            Artisan::call('optimize');

            $user      = User::create([
                'name'              => 'omoding',
                'email'             => 'admin@gmail.com',
                'email_verified_at' => '2021-12-01 13:43:16',
                'password'          => '$2y$10$nL9FBi9XbeMr79X.KfgvV.y4pT4e/RAwvtvNmW7QObKe65fbU19Yq',
                'remember_token'    => 'Yh5GEwEgPhricASoQb4ZEkxBA2wYbniyaQcJyyYnU7AaQk21N4Dwb7hvzr2c',
                'created_at'        => '2021-12-01 13:43:16',
                'updated_at'        => '2021-12-01 13:43:16'
            ]);
            $candidate = Candidate::create([
                'user_id' => $user->id,
                'fname'   => 'omoding',
                'lname'   => 'mike',
                'gender'  => 'male',
                'dob'     => date('Y-m-d')

            ]);
            //`fname`, `mname`, `lname`, `gender`, `dob`,
//            Candidate::where('user_id', Auth::user()->id)
//                ->update([
//                    'fname'  => 'omoding',
//                    'lname'  => 'mike',
//                    'gender' => 'male',
//                    'dob'    => date('Y-m-d')
//                ]);

            Artisan::call('view:clear');
            dd('Cache cleared successfully');
            /*
             * INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'omoding', 'admin@gmail.com', NULL, '$2y$10$nL9FBi9XbeMr79X.KfgvV.y4pT4e/RAwvtvNmW7QObKe65fbU19Yq',
             'Yh5GEwEgPhricASoQb4ZEkxBA2wYbniyaQcJyyYnU7AaQk21N4Dwb7hvzr2c', '2021-12-18 11:55:41', '2021-12-18 11:55:41');
             */

        }

        public function relation()
        {
//            return Course::where('course', 'B. ARCH')->essentials;
//                ->where('subject_code', 16)
//                ->get();

//            return EssentialSubject::where('subject_code', 11)->course;
            $essential = EssentialSubject::all();
            return $essential->subject->subject;

        }


    }
