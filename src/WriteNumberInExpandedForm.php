<?php


namespace maxlzp\codewars;

/**
 * Class WriteNumberInExpandedForm
 *
 * You will be given a number and you will need to return it as a string in Expanded Form. For example:
 *
 * expanded_form(12); // Should return "10 + 2"
 * expanded_form(42); // Should return "40 + 2"
 * expanded_form(70304); // Should return "70000 + 300 + 4"
 *
 * NOTE: All numbers will be whole numbers greater than 0.
 *
 * @package maxlzp\codewars
 */
class WriteNumberInExpandedForm
{
    /**
     * @param int $n
     *
     * @return string
     */
    public function expanded_form(int $n): string {
        $digitRIndex = 0;
        $segments = [];
        while($n > 0) {
            $mod = $n % 10;
            $n = \intdiv($n, 10);
            if ($mod !== 0 ) {
                \array_unshift($segments, $mod * pow(10, $digitRIndex));
            }
            $digitRIndex++;
        }
        return \implode(' + ', $segments);
    }
}