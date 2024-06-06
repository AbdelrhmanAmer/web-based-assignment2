<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testRegisterRouteGet(): void
    {
        $response = $this->get('/register');
        $response->assertStatus(302);
    }
    public function testRegisterRoutePost(): void
    {
        $response = $this->Post('/register');
        $response->assertStatus(302);
    }
}
