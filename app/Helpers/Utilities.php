<?php

    namespace App\Helpers;

    use DateTime;

    class Utilities
    {
        /**
         * @param $le
         * @param $set
         *
         * @return array
         */
        public static function array_combination($le, $set)
        : array
        {

            $lk  = (new Utilities)->combination_number($le, count($set));
            $ret = array_fill(0, $lk, array_fill(0, $le, ''));

            $temp = [];
            for ($i = 0; $i < $le; $i++)
                $temp[$i] = $i;

            $ret[0] = $temp;

            for ($i = 1; $i < $lk; $i++) {
                if ($temp[$le - 1] != count($set) - 1) {
                    $temp[$le - 1]++;
                } else {
                    $od = -1;
                    for ($j = $le - 2; $j >= 0; $j--)
                        if ($temp[$j] + 1 != $temp[$j + 1]) {
                            $od = $j;
                            break;
                        }
                    if ($od == -1)
                        break;
                    $temp[$od]++;
                    for ($j = $od + 1; $j < $le; $j++)
                        $temp[$j] = $temp[$od] + $j - $od;
                }
                $ret[$i] = $temp;
            }
            for ($i = 0; $i < $lk; $i++)
                for ($j = 0; $j < $le; $j++)
                    $ret[$i][$j] = $set[$ret[$i][$j]];

            return $ret;
        }

        function combination_number($k, $n)
        {
            $n = intval($n);
            $k = intval($k);
            if ($k > $n) {
                return 0;
            } elseif ($n == $k) {
                return 1;
            } else {
                if ($k >= $n - $k) {
                    $l = $k + 1;
                    for ($i = $l + 1; $i <= $n; $i++)
                        $l *= $i;
                    $m = 1;
                    for ($i = 2; $i <= $n - $k; $i++)
                        $m *= $i;
                } else {
                    $l = ($n - $k) + 1;
                    for ($i = $l + 1; $i <= $n; $i++)
                        $l *= $i;
                    $m = 1;
                    for ($i = 2; $i <= $k; $i++)
                        $m *= $i;
                }
            }
            return $l / $m;
        }

        public static function arraysEqual($a, $b)
        : bool
        {
            return (
                is_array($a)
                && is_array($b)
                && count($a) == count($b)
                && array_diff($a, $b) === array_diff($b, $a)
            );
        }

        public static function arrayContains(array $a, array $b)
        : bool
        {
            return empty(array_diff($a, $b));
        }

        public static function normalDate(string $date)
        : string
        {

            return (DateTime::createFromFormat('Y-m-d', $date))->format('d/m/Y');

        }

        public static function dbDate(string $date)
        : string
        {

            return (DateTime::createFromFormat('d/m/Y', $date))->format('Y-m-d');

        }

        public static function data()
        : array
        {
            $array = ['mathematics', 'chemistry', 'biology', 'geography', 'agriculture', 'entrepreneurship', 'economics'];
            return Utilities::combinationsToJson(Combination::sciences($array));
        }

        public static function combinationsToJson(array $combinations)
        : array

        {
            $response = [];
            $id       = 1;
            $temp     = [];
            foreach ($combinations as $combination) {
                $temp['id']          = $id;
                $temp['code']        = self::getAcronym($combination);
                $temp['combination'] = self::arrayToString($combination);
                $temp['projection']  = self::getPoints($combination);
                array_push($response, $temp);
                $id++;
            }
            return $response;
        }

        public static function getAcronym(array $combination)
        : string
        {
            $stringCombination = '';
            foreach ($combination as $subject) {

                $stringCombination .= $subject . ' ';
            }
            $acronym = '';
            foreach (explode(' ', $stringCombination) as $word) $acronym .= mb_substr($word, 0, 1, 'utf-8');
//            return '<b>' . strtoupper($acronym) . '</b>';
            return strtoupper($acronym);

        }

        public static function arrayToString(array $combination)
        : string
        {
            $stringSubject = '';
            foreach ($combination as $subject) {

                $stringSubject .= $subject . ' ';
            }
            return ucwords($stringSubject);
        }

        public static function getPoints(array $combination)
        : int
        {
            $points = 2;
            foreach ($combination as $subject) {
                $grade = Subjects::getGrade($subject);
//                info($subject . ':' . $grade);
                if ($grade == 0) {
                    continue;
                } else {

                    switch ($grade) {
                        case 1:
                        case 2:
                        case 3:
                            $points += 6;
                            break;
                        case 4:
                            $points += 5;
                            break;
                        case 5:
                            $points += 4;
                            break;
                        case 6:
                            $points += 3;
                            break;
                        case 7:
                            $points += 2;
                            break;
                        case 8:
                            $points += 1;
                            break;
                        default:
                            $points += 0;
                    }
                }
            }
            return $points;
        }

        public static function weightSubjects(array $subjects)
        {
            $subjectString = '';
            foreach ($subjects as $subject) {
                $subjectString .= Clean::removeAllspecialCharacters($subject) . ', ';
            }
            return substr($subjectString, 0, -2);
        }

    }
