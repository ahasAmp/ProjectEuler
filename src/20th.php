<?php

class Twentieth
{
    public static function Sums()
    {
        $limit = 100;
        $total = 0;
        $product = 1;

        for ($i = $limit; $i > 1; $i--) {
            $product = bcmul($product, $i);
        }

        $length = strlen($product);

        for ($i = 0; $i < $length; $i++) {
            $total += substr($product, $i, 1);
        }

        echo "\e[1;32m Factorial digit sum in 100 is:  " . $total . "\e[0m\n";
        return $total;
    }
}

/*
$FactorialDigitSum = new Twentieth;
$FactorialDigitSum -> Sums();
*/

?>