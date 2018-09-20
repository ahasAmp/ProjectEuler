<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FirstText extends TestCase
{
    public function testSumMultiples()
    {
        $this->assertEquals(233168, First::Sums());
    }
}