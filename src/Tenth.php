<?php

class Tenth
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
        $sum = 0;
        for ($i = 2; $i <= 2000000; $i++){
            if (self::IsPrime($i)){
                $sum = $sum+$i;
            }
        }
        echo "\e[0;37m Sum of all the primes is:  ".$sum."\e[0m\n";
        return $sum;
    }
}

/*
$SummationPri = new Tenth;
$SummationPri -> Sums();
*/

?>
