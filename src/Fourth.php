<?php

class Fourth
{
    public static $palindrome = 0;

    public static function Sums()
    {
        for ($i = 1; $i <= 999; $i++) {
            for ($j = 1; $j <= 999; $j++) {
                $x = $i * $j;
                if ($x > self::$palindrome && $x == strrev($x)) {
                    self::$palindrome = $x;
                }
            }
        }
        echo "\e[1;31m Largest palindrome from two 3-digit numbers is:  " . self::$palindrome . "\e[0m\n";
        return(self::$palindrome);
    }
}



?>