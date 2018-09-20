<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Fo8Text extends TestCase
{
    public function testTenDigits()
    {
        $this->assertEquals(9110846700, FortyEighth::Sums());
    }
}