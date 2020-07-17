<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Str;

class CalcTest extends TestCase
{
    function testOption(): void
    {
        $calc= new Calc();

        $this->assertIsInt(
            true,
            $calc->sum(2, 3)

        );
        $this->assertEquals(
            true,
            $calc->dif(6, 3)
        );
        $this->assertIsBool(
            
            $calc->mul(2,2)
        );
    }
}