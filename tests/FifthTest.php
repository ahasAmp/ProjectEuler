<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FifthText extends TestCase
{
    public function testSmallestMultiple()
    {
        $this->assertEquals(232792560, Fifth::Sums());
    }
}