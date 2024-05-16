<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LangTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testLoginRouteGet(): void
    {
        $response = $this->get('/locale/{lang}');
        $response->assertStatus(302);
    }
}
