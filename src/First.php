<?php

class First
{
    public $var;

    public static function Sums()
    {
        $MultipliesOfThree = 0;
        $MultipliesOfFive = 0;
        for ($i = 1; $i < 1000; $i++) {
            if ($i % 3 == 0)
                $MultipliesOfThree = $MultipliesOfThree + $i;
            else if ($i % 5 == 0)
                $MultipliesOfFive = $MultipliesOfFive + $i;

        }
        $var = $MultipliesOfThree + $MultipliesOfFive;
        echo "\e[1;35m Multiples of 3 and 5 is:  " . $var . "\e[0m\n";
        return $var;
    }
}

/*
$sum = new First;
$sum -> Sums();
*/
?>