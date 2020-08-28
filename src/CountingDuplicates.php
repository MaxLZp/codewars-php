<?php


namespace maxlzp\codewars;

/**
 * Class CountingDuplicates (6kyu)
 *
 * Count the number of Duplicates
 *
 * Write a function that will return the count of distinct case-insensitive
 * alphabetic characters and numeric digits that occur more than once in the input
 * string. The input string can be assumed to contain only alphabets
 * (both uppercase and lowercase) and numeric digits.
 *
 * Example:
 *
 * "abcde" -> 0 # no characters repeats more than once
 * "aabbcde" -> 2 # 'a' and 'b'
 * "aabBcde" -> 2 # 'a' occurs twice and 'b' twice (`b` and `B`)
 * "indivisibility" -> 1 # 'i' occurs six times
 * "Indivisibilities" -> 2 # 'i' occurs seven times and 's' occurs twice
 * "aA11" -> 2 # 'a' and '1'
 * "ABBA" -> 2 # 'A' and 'B' each occur twice
 *
 * @package maxlzp\codewars
 */
class CountingDuplicates
{

    public function duplicateCount(string $string): int
    {
        return $this->countDuplicates(
            $this->makeCharsDictionary(
                $this->makeLowercase($string)
            )
        );
    }

    private function makeLowercase(string $string): string
    {
        return \strtolower($string);
    }

//    private function makeCharsDictionary(string $string): array
//    {
//        $dictionary = [];
//        $stringArray = \str_split($string);
//        \array_walk($stringArray, function ($item, $key) use (&$dictionary) {
//            if (!\array_key_exists($item, $dictionary)) {
//                $dictionary[$item] = 0;
//            }
//            $dictionary[$item]++;
//        });
//        return $dictionary;
//    }

    private function makeCharsDictionary(string $string): array
    {
        return \array_count_values(\str_split($string));
    }

    private function countDuplicates(array $dictionary): int
    {
        return \array_reduce($dictionary, function($total, $item) {
            $total += ($item > 1) ? 1 : 0;
            return $total;
        }, 0);
    }
}