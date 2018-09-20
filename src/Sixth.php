<?php

class Sixth
{
    public static function Sums()
    {
        $sum = 1;
        $square = 1;

        for ($i = 2; $i <= 100; $i++) {
            $sum += ($i * $i);  //(1 + 2*2 + 3*3 + 4*4 + ...)
            $square += $i;      //(1+ 2 + 3 + 4 +...)
        }
        $result = ($square * $square) - $sum; //(1+2+...+100)*(1+2+...+100) - (1 + 2*2 + ... + 100*100)
        echo "\e[1;34m Difference between sum of squares of first 100 numbers and square of sum is:  ".$result."\e[0m\n";
        return $result;
    }
}

/*
$SquareDifference = new Sixth;
$SquareDifference -> Sums();
*/

?>