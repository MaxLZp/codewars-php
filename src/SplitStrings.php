<?php


namespace maxlzp\codewars;


class SplitStrings
{
    public function solution($str): array
    {
        if (\strlen($str) === 0) return [];
        return \str_split(
            (\strlen($str) % 2 === 0) ? $str : $str . '_',
            2
        );
    }

}