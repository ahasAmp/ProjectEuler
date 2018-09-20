<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FourthText extends TestCase
{
    public function testLargestPalindrome()
    {
        $this->assertEquals(906609, Fourth::Sums());
    }
}