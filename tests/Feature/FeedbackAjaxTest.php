<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/ajax');

        $response->assertStatus(200);
    }

    public function testPutTest()
    {
        $response = $this->post('/ajax', ['data' => json_encode([1,2,3])]);

        $response->assertStatus(200);
    }
}
