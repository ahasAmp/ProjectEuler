<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NinthText extends TestCase
{
    public function testPythagorean()
    {
        $this->assertEquals(31875000, Ninth::Sums());
    }
}