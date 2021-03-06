<?php

namespace PHLAK\Twine\Tests\Methods;

use PHLAK\Twine;
use PHLAK\Twine\Tests\TestCase;

class NthTest extends TestCase
{
    public function test_it_can_get_every_nth_character()
    {
        $string = new Twine\Str('john pinkerton');

        $nth = $string->nth(3);

        $this->assertInstanceOf(Twine\Str::class, $nth);
        $this->assertEquals('jnieo', $nth);
    }

    public function test_it_can_get_every_nth_character_starting_at_an_offset()
    {
        $string = new Twine\Str('john pinkerton');

        $nth = $string->nth(3, 2);

        $this->assertInstanceOf(Twine\Str::class, $nth);
        $this->assertEquals('hpkt', $nth);
    }

    public function test_it_can_get_every_nth_character_of_a_multibyte_string()
    {
        $string = new Twine\Str('宮本 任天堂 茂');

        $nth = $string->nth(3);

        $this->assertInstanceOf(Twine\Str::class, $nth);
        $this->assertEquals('宮任 ', $nth);
    }
}
