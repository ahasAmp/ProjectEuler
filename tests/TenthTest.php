<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TenthText extends TestCase
{
    public function testSummationPrimes()
    {
        $this->assertEquals(142913828922, Tenth::Sums());
    }
}

/*
composer dumpautoload -o
./phpunit --bootstrap src/autoload.php tests/TenthTest
*/
?>