<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TwText extends TestCase
{
    public function testFactorialDigitSum()
    {
        $this->assertEquals(648, Twentieth::Sums());
    }
}