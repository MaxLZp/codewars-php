<?php


namespace maxlzp\codewars;

/**
 * Class SeriesSum
 *
 * Your task is to write a function which returns the sum of following series upto nth term(parameter).
 * Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...
 *
 * Rules:
 * - You need to round the answer to 2 decimal places and return it as String.
 * - If the given value is 0 then it should return 0.00
 * - You will only be given Natural Numbers as arguments.
 *
 * Examples:
 * - SeriesSum(1) => 1 = "1.00"
 * - SeriesSum(2) => 1 + 1/4 = "1.25"
 * - SeriesSum(5) => 1 + 1/4 + 1/7 + 1/10 + 1/13 = "1.57"
 *
 * @package maxlzp\codewars
 */
class SeriesSum
{
//    public function series_sum($n)
//    {
//        $sum = 0;
//        while ($n > 0)
//        {
//            $sum += 1 / $this->get_denominator($n--);
//        }
//        return $this->formatResult($sum);
//    }

    public function series_sum($n): string
    {
        $sum = 0;
        while ($n > 0) {
            $sum += 1 / $this->get_denominator($n--);
        }
        return $this->formatResult($sum);
    }

    private function get_denominator($n): float
    {
        $denominatorStep = 3;
        return 1 + ($n - 1) * $denominatorStep;
    }

    private function formatResult($result): string
    {
        return \sprintf("%.2f", $result);
    }
}