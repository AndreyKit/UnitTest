<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Str;

class ConverterTest extends TestCase
{
    function testOption(): void
    {
        $str = new Str();

        $this->assertEquals(
            true,
            $str->compare("ab", "ab")

        );
        $this->assertEquals(
            true,
            $str->compare("ab", "abc")
        );
        $this->assertIsBool(
            
            $str->comparel("abc","abc")
        );
    }
}
function testLen(): void
{
    $str = new Str();
    $this->assertIsInt(
        $str->len("Hello")
    );
    $this->assertEquals(
        5,
        $str->len("ello")
    );
    
    $this->assertEquals(
        6,
        $str->len("Привет")
    );
}