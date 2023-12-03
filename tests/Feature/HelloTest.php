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
            ->assertExactJson(['foo' => 'bar']);
    }
}
