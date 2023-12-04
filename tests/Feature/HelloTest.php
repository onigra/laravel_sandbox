<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_hello()
    {
        $response = $this->get('/hello');

        $response
            ->assertStatus(200)
            ->assertExactJson(['Hello' => 'world']);
    }

    public function test_get_hello_with_name_parameter()
    {
        // given
        $name = 'Ji-yeong';

        // when
        $response = $this->get("/hello?name={$name}");

        // then
        $response
            ->assertStatus(200)
            ->assertExactJson(['Hello' => 'Ji-yeong']);
    }
}
