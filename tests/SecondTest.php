<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SecondText extends TestCase
{
    public function testEvenFibonacci()
    {
        $this->assertEquals(4613732, Second::Sums());
    }
}