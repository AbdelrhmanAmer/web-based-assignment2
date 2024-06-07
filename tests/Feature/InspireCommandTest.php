<?php

namespace Tests\Feature;

use Illuminate\Foundation\Inspiring;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InspireCommandTest extends TestCase
{
    use RefreshDatabase;

    public function testInspireCommand()
    {
        // Run the 'inspire' command
        $this->artisan('inspire')
            ->expectsOutput(Inspiring::quote())
            ->assertExitCode(0);
    }
}