<?php

class Sixteenth
{
    public static function Sums()
    {
        $x = 0;
        $y = bcpow(2,1000);
        $length = strlen($y);

        for ($i = 0; $i < $length; $i++) {
            $x += substr($y, $i, 1);
        }
        echo "\e[1;32m the sum of the digits of the number 2^1000 is:  " . $x . "\e[0m\n";
        return $x;
    }
}

/*
$PowerDigitSum = new Sixteenth;
$PowerDigitSum -> Sums();
*/

?>