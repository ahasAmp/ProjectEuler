<?php

class Third
{
    public static  $primes  = array();

    public static function IsPrime($number)
    {
        for($i=2; $i < $number; $i++)
        {
            if($number % $i == 0)
            {
                return 0;
            }
        }
        return 1;
    }

    public static function findPrimes($x)
    {
        global $primes;
        for ($i = 3; $i < sqrt($x); $i += 2)
        {
            if ((fmod($x,$i) == 0) && self::IsPrime($i))
            {
                if (! in_array($i, self::$primes))
                {
                    array_push(self::$primes, $i);
                }
            }
        }
        rsort( self::$primes,  SORT_NUMERIC);
        echo "\e[1;36m The largest prime factor of '600851475143' is:  ".self::$primes[0]."\e[0m\n";

        return(self::$primes[0]);
    }

}

/*
$prime = new Third;
$prime -> findPrimes(600851475143);
*/

?>