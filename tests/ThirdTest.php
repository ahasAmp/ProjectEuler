<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ThirdText extends TestCase
{
    public function testLargestPrime()
    {
        $this->assertEquals(6857, Third::findPrimes(600851475143));
    }
}