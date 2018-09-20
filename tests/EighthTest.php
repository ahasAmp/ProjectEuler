<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EighthText extends TestCase
{
    public function testLargestProduct()
    {
        $this->assertEquals(23514624000, Eighth::Sums());
    }
}