<?php

    namespace App\Helpers;

    use App\Models\Candidate;
    use App\Models\PleResult;
    use App\Models\UaceResult;
    use App\Models\UaceSubjects;
    use App\Models\UceResult;
    use App\Models\UceSubject;
    use Illuminate\Support\Facades\Auth;

    class Init
    {
        /*
        |--------------------------------------------------------------------------
        | Initialise PLE results table
        |--------------------------------------------------------------------------
        |
        */
        public static function pleResults()
        {
            return PleResult::firstOrCreate([
                'user_id' => Auth::user()->id
            ]);
        }

        /*
                |--------------------------------------------------------------------------
                | Initialise UCE Results table
                |--------------------------------------------------------------------------
                |
                */

        public static function uceResults()
        {
            return UceResult::firstOrCreate([
                'user_id' => Auth::user()->id
            ]);
        }

        /*
            |--------------------------------------------------------------------------
            | Initialise UACE Results table
            |--------------------------------------------------------------------------
            |
            */

        public static function uaceResults()
        {
            return UaceResult::firstOrCreate([
                'user_id' => Auth::user()->id
            ]);
        }

        /*
            |--------------------------------------------------------------------------
            | Initialise UACE Subjects table
            |--------------------------------------------------------------------------
            |
            */

        public static function uaceSubjects()
        {
            return UaceSubjects::firstOrCreate([
                'user_id' => Auth::user()->id
            ]);
        }

        /*
            |--------------------------------------------------------------------------
            | Initialise All subjects table
            |--------------------------------------------------------------------------
            |
            */
        public static function subjects()
        : int
        {
            if (empty(Subjects::fetch_all()))
                UceSubject::create([
                    'user_id' => Auth::user()->id,
                    'subj_1'  => 'physics',
                    'subj_2'  => 'mathematics',
                    'subj_3'  => 'chemistry',
                    'subj_4'  => 'biology',
                    'subj_5'  => 'history',
                    'subj_6'  => 'geography',
                    'subj_7'  => 'english'
                ]);
            return 1;
        }

        /*
            |--------------------------------------------------------------------------
            | Initialise UCE  candidate table data
            |--------------------------------------------------------------------------
            |
            */
        public static function candidate()
        {
            return Candidate::firstOrCreate([
                'user_id' => Auth::user()->id
            ]);
        }

    }
