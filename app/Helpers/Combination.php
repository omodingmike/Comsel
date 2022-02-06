<?php

    namespace App\Helpers;

    class Combination
    {
        public static function sciences(array $sciences)
        : array
        {
            $scienceCombinations = [
                ['mathematics', 'economics', 'geography'],
                ['mathematics', 'economics', 'art_ips'],
                ['mathematics', 'art_ips', 'geography'],
                ['mathematics', 'entrepreneurship', 'geography'],
                ['mathematics', 'entrepreneurship', 'economics'],
                ['mathematics', 'entrepreneurship', 'art_ips'],
                ['physics', 'economics', 'mathematics'],
                ['physics', 'entrepreneurship', 'mathematics'],
                ['physics', 'chemistry', 'mathematics'],
                ['physics', 'chemistry', 'biology'],
                ['biology', 'chemistry', 'mathematics'],
                ['biology', 'chemistry', 'Agriculture'],
                ['physics', 'art_ips', 'mathematics'],
                ['physics', 'technical_drawing', 'mathematics'],

            ];
            $combinations        = [];
            foreach ($scienceCombinations as $scienceCombination) {
                foreach (Utilities::array_combination(3, $sciences) as $combination) {
                    if (Utilities::arraysEqual($scienceCombination, $combination)) {
                        if (!in_array($scienceCombination, $combinations)) {
                            if ((Utilities::arrayContains(['mathematics', 'geography'], $combination)) and
                                Subjects::getGrade('mathematics') > 4) {
                                continue;
                            }
                            $combinations[] = $scienceCombination;
                        }
                    }
                }
            }
            return $combinations;
        }

        public static function arts(array $artsSubjects)
        : array
        {
            $artsCombinations = [
                ['history', 'economics', 'geography'], ['history', 'islam', 'arabic'], ['history', 'islam', 'kiswahili'],
                ['history', 'art_ips', 'kiswahili'], ['history', 'agriculture', 'arabic'], ['history', 'economics', 'entrepreneurship'],
                ['art_ips', 'economics', 'entrepreneurship'], ['geography', 'economics', 'entrepreneurship'],
                ['geography', 'islam', 'french'], ['geography', 'islam', 'art_ips'], ['geography', 'art_ips', 'kiswahili'],
                ['geography', 'art_ips', 'french'], ['geography', 'art_ips', 'luganda'], ['kiswahili', 'agriculture', 'islam'],
                ['french', 'agriculture', 'islam'], ['luganda', 'economics', 'entrepreneurship'],
                ['divinity', 'economics', 'entrepreneurship'], ['islam', 'economics', 'entrepreneurship'], ['islam', 'arabic', 'economics'],
                ['islam', 'arabic', 'entrepreneurship'], ['arabic', 'economics', 'entrepreneurship'], ['history', 'economics', 'divinity'],
                ['arabic', 'economics', 'divinity'], ['arabic', 'entrepreneurship', 'divinity'], ['arabic', 'entrepreneurship', 'art_ips'],
                ['luganda', 'entrepreneurship', 'art_ips'], ['luganda', 'entrepreneurship', 'divinity'], ['french', 'economics', 'divinity'],
                ['luganda', 'economics', 'divinity'], ['luganda', 'economics', 'art_ips'], ['history', 'art_ips', 'divinity'],
                ['history', 'economics', 'islam'], ['history', 'entrepreneurship', 'geography'], ['history', 'entrepreneurship', 'luganda'],
                ['history', 'islam', 'luganda'], ['history', 'islam', 'french'], ['history', 'entrepreneurship', 'islam'],
                ['history', 'entrepreneurship', 'divinity'], ['history', 'entrepreneurship', 'arabic'],
                ['history', 'islam', 'geography'], ['geography', 'islam', 'luganda'], ['geography', 'islam', 'arabic'],
                ['history', 'islam', 'arabic'], ['history', 'luganda', 'geography'], ['history', 'french', 'geography'],
                ['history', 'arabic', 'geography'], ['history', 'divinity', 'geography'], ['history', 'art_ips', 'geography'],
                ['history', 'economics', 'luganda'], ['arabic', 'economics', 'agriculture'], ['history', 'economics', 'arabic'],
                ['history', 'economics', 'kiswahili'], ['history', 'entrepreneurship', 'kiswahili'],
            ];
            $combinations     = [];
            foreach ($artsCombinations as $artsCombination) {
                foreach (Utilities::array_combination(3, $artsSubjects) as $combination) {
                    if (Utilities::arraysEqual($artsCombination, $combination)) {
                        if (!in_array($artsCombinations, $combinations)) {
                            $combinations[] = $artsCombination;
                        }
                    }
                }
            }
            return $combinations;

        }
    }
