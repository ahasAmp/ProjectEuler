<?php

class Second
{
    public $EvenSum;

    public static function Sums()
    {
        $EvenSumFun = 0;
        $fibonacci = 1;
        $Previous1 = 0;
        $Previous2 = 1;

        while ($fibonacci <= 4000000) {
            $fibonacci = $Previous1 + $Previous2;
            $Previous1 = $Previous2;
            $Previous2 = $fibonacci;

            if ($fibonacci % 2 == 0) {
                $EvenSumFun += $fibonacci;
            }
        }
        $EvenSum = $EvenSumFun;
        echo "\e[1;32m Sum of Even Fibonacci numbers is:  " . $EvenSum . "\e[0m\n";
        return $EvenSum;
    }
}

/*
$sum = new Second;
$sum -> Sums();
*/

?>