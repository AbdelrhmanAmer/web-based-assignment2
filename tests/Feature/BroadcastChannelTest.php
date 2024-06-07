<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BroadcastChannelTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanListenToOwnChannel()
    {
        // Create a user
        $user = User::factory()->create();

        // Simulate the user trying to listen to their own channel
        $response = $this->actingAs($user)->getJson('/broadcasting/auth', [
            'channel_name' => 'App.Models.User.' . $user->id,
        ]);

        // Assert the response status is 200
        $response->assertStatus(200);
    }

    public function testUserCannotListenToOthersChannel()
    {
        // Create two users
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        // Simulate user1 trying to listen to user2's channel
        $response = $this->actingAs($user1)->getJson('/broadcasting/auth', [
            'channel_name' => 'App.Models.User.' . $user2->id,
        ]);

        // Assert the response status is 403 (Forbidden)
        $response->assertStatus(403);
    }
}
