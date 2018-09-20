<?php

class Ninth
{
    public static function Sums()
    {
        // Not my solution
        $product = 0;

        for ($i = 1 ;; $i++) {
            for ($j = 1; $j < $i; $j++) {
                $a = ($i * $i) - ($j * $j);
                $b = 2 * $i * $j;
                $c = ($i * $i) + ($j * $j);
                if ($a + $b + $c == 1000) {
                    $product = $a * $b * $c;
                    break 2;
                }
            }
        }
        echo "\e[0;35m Pythagorean is:  ".$product."\e[0m\n";
        return $product;
    }
}

/*
$Pythagorean = new Ninth;
$Pythagorean -> Sums();
*/

?>