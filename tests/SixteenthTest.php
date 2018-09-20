<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Fo8Text extends TestCase
{
    public function testPowerDigitSum()
    {
        $this->assertEquals(1366, Sixteenth::Sums());
    }
}