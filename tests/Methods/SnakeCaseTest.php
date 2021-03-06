<?php

namespace PHLAK\Twine\Tests\Methods;

use PHLAK\Twine;
use PHLAK\Twine\Tests\TestCase;

class SnakeCaseTest extends TestCase
{
    public function test_it_can_convert_to_snake_case()
    {
        $string = new Twine\Str('john pinkerton');

        $snakeCase = $string->snakeCase();

        $this->assertInstanceOf(Twine\Str::class, $snakeCase);
        $this->assertEquals('john_pinkerton', $snakeCase);
    }

    public function test_it_a_multibyte_string_can_be_converted_to_snake_case()
    {
        $string = new Twine\Str('джон пинкертон');

        $snakeCase = $string->snakeCase();

        $this->assertInstanceOf(Twine\Str::class, $snakeCase);
        $this->assertEquals('джон_пинкертон', $snakeCase);
    }
}
