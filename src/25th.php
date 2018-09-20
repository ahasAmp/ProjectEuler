<?php

class TwentyFifth
{
    public static function Sums()
    {
        $fibonacci = 1;
        $Previous1 = 0;
        $numlength = 0;
        $i = 0;
        while ($numlength < 1000) {
            $Previous1 = bcadd($Previous1, $fibonacci);
            $fibonacci = bcadd($Previous1, $fibonacci);
            $numlength = strlen((string)$fibonacci);
            $i += 2;
        }
        echo "\e[1;32m Index of Fib with 1000 number is:  " . $i . "\e[0m\n";
        return $i;
    }
}

/*
$sum = new TwentyFifth;
$sum -> Sums();
*/

?>