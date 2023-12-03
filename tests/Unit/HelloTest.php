<?php

namespace Tests\Unit;

use App\Models\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_say_hello()
    {
        // when
        $actual = Hello::say_hello();

        // then
        $expected = collect(['Hello' => 'world']);
        $this->assertEquals($actual, $expected);
    }

    public function test_say_hello_with_name()
    {
        // given
        $name = 'Sae-byeok';

        // when
        $actual = Hello::say_hello($name);

        // then
        $expected = collect(['Hello' => 'Sae-byeok']);
        $this->assertEquals($actual, $expected);
    }
}
