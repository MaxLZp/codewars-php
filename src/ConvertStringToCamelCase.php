<?php

namespace maxlzp\codewars;

/**
 * Class ConvertStringToCamelCase
 *
 * Complete the method/function so that it converts dash/underscore delimited words into camel casing.
 * The first word within the output should be capitalized only if the original word was capitalized
 * (known as Upper Camel Case, also often referred to as Pascal case).
 *
 *  Examples:
 * toCamelCase("the-stealth-warrior"); // returns "theStealthWarrior"
 * toCamelCase("The_Stealth_Warrior"); // returns "TheStealthWarrior"
 *
 *  * @package maxlzp\codewars
 */
class ConvertStringToCamelCase
{

    public function toCamelCase($str)
    {
        $delimiterRegex = "/[-_]/";

        $words = \preg_split($delimiterRegex, $str);

        \array_walk($words, function (&$word, $index){
            if ($index === 0) return;
            $word = ucfirst($word);
        });

        return \implode($words);
    }

    public function toCamelCase2($str)
    {
        $delimiterRegex = "/[-_]/";
        $words = \preg_split($delimiterRegex, $str);
        return \array_shift($words) .
            \implode(
                \array_map(function ($word){
                    return \ucfirst($word);
                }, $words)
            );
    }
}