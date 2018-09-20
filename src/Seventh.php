<?php

class Seventh
{
    public static function IsPrime($number)
    {
        $range = $number;
        for($i=2; $i < $range; $i++)
        {
            if($number % $i == 0)
            {
                return 0;
            }
            $range = $number / $i;
        }
        return 1;
    }

    public static function Sums()
    {
        $i = 1;
        $j = 2;

        While ($i <= 10001) {
            if (self::IsPrime($j)){
                $i++;
            }
            $j++;
        }

        $j = $j-1;

        echo "\e[1;34m 10001st Prime is:  ".$j."\e[0m\n";
        return $j;
    }
}

/*
$Prime = new Seventh;
$Prime -> Sums();
*/

?>