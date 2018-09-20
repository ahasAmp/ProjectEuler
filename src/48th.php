<?php

class FortyEighth
{
    public static function Sums()
    {
        $limit = 1000;
        $sum = 0;

        foreach (range(1, $limit) as $i) {
            $sum = bcadd($sum, bcpow($i, $i));
        }

        $x = substr($sum, -10);
        echo "\e[1;36m Self powers is:  " . $x . "\e[0m\n";
        return $x;
    }
}

/*
$TenDigits = new FortyEighth;
$TenDigits -> Sums();
*/

?>