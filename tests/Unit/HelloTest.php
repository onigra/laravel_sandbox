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
        // setup
        $expected = collect(['foo' => 'bar']);

        // when
        $actual = Hello::say_hello(); 

        // then
        $this->assertEquals($actual, $expected);
    }
}
