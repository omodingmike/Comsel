<?php

    namespace App\Helpers;

    use Illuminate\Support\Str;

    class Clean
    {

        public static function subject(string $subject)
        {
            $cleaned = Str::replace('/', '_', strtolower($subject));
            return Str::replace(' ', '_', strtolower($cleaned));
        }

        public static function removeAllspecialCharacters(string $subject)
        : string
        {
            $value   = strtolower($subject);
            $cleaned = Str::replace('/', ' ', strtolower($subject));
            return ucfirst(Str::replace('/', ' ', Str::replace('_', ' ', $value)));
        }

        public static function aLevel(string $subject)
        {
            $subj    = Str::remove('a_', $subject);
            $cleaned = Str::replace('/', '_', strtolower($subj));
            return Str::replace(' ', '_', strtolower($cleaned));
        }

        public static function removeSymbols(string $subject)
        {

            return Str::replace('_', ' ', strtoupper($subject));
//            return strtoupper("mike omoding");
        }
    }
