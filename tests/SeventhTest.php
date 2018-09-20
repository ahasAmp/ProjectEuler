<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SeventhText extends TestCase
{
    public function test10001stPrime()
    {
        $this->assertEquals(104743, Seventh::Sums());
    }
}