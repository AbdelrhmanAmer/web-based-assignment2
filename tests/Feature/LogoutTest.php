<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testLangRouteGet(): void
    {
        $response = $this->get('/logout');
        $response->assertStatus(302);
    }
}
