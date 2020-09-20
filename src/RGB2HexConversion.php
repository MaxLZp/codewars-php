<?php


namespace maxlzp\codewars;

/**
 * Class RGB2HexConversion (5kyu)
 *
 * The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.
 *
 * Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.
 *
 * The following are examples of expected output values:
 *
 * rgb(255, 255, 255); // returns FFFFFF
 * rgb(255, 255, 300); // returns FFFFFF
 * rgb(0, 0, 0); // returns 000000
 * rgb(148, 0, 211); // returns 9400D3
 *
 * @package maxlzp\codewars
 */
class RGB2HexConversion
{

    public function rgb($r,$g,$b){
        var_dump("Debugging:", ['r'=>$r, 'g'=>$g, 'b'=>$b]);
        return $this->getFullHex(
            $this->getValidRGB($r),
            $this->getValidRGB($g),
            $this->getValidRGB($b)
        );
    }

    /**
     * Convert decimal to hex
     *
     * @param $decimal
     *
     * @return string
     */
    private function decimal2hex($decimal)
    {
        return dechex($decimal);
    }

    /**
     * Gets hex value of 2 chars
     *
     * @param $hex
     *
     * @return string
     */
    private function formatHex($hex): string
    {
        return \strtoupper(\strlen($hex) === 2 ? $hex : '0'.$hex);
    }

    /**
     * Build hex
     *
     * @param $r
     * @param $g
     * @param $b
     *
     * @return string
     */
    private function getFullHex($r, $g, $b): string
    {
        return $this->formatHex($this->decimal2hex($r))
            . $this->formatHex($this->decimal2hex($g))
            . $this->formatHex($this->decimal2hex($b));
    }

    /**
     * Return valid rgb-value
     * If $rgb < 0 returns 0;
     * If $rgb > 255 returns 255;
     *
     *
     * @param $rgb
     *
     * @return int
     */
    private function getValidRGB($rgb): int
    {
        $MIN = 0;
        $MAX = 255;
        if ($rgb < $MIN) return $MIN;
        if ($rgb > $MAX) return $MAX;
        return $rgb;
    }
}