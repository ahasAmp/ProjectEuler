<?php

class Fifth
{
    // Not my solution  "https://www.w3resource.com/euler-project/euler-problem5.php"
    public static function Sums()
    {
        $y = 0;
        $l = 20;
        for ($i = $l; !$y; $i += $l) {
            for ($j = 2; $j < $l; $j++) {
                if ($i % $j == 0) {
                    $y = 1;
                } else {
                    $y = 0;
                    break;
                }
            }
            if ($y) {
                echo "\n\e[1;33m Smallest +number evenly divisible by all 1->20 numbers is:  " . $i . "\e[0m\n\n";
                break;
            }
        }
        return $i;
    }
}

$SmallestMul = new Fifth;
$SmallestMul -> Sums();

?>