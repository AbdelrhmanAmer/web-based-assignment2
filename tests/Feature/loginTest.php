<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testLoginRouteGet(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testLoginRoutePost(): void
    {
        $response = $this->Post('/login');
        $response->assertStatus(302);
    }
}
