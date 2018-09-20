<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Tw5Text extends TestCase
{
    public function test1000digits()
    {
        $this->assertEquals(4782, TwentyFifth::Sums());
    }
}