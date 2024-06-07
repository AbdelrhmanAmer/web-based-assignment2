<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ApiUserTest extends TestCase
{
    use RefreshDatabase;

    public function testUserEndpoint()
    {

        $user = User::factory()->create([
            'password' => Hash::make('password'),
        ]);


        $response = $this->actingAs($user, 'sanctum')->get('/api/user');


        $response->assertStatus(200)
            ->assertJson([
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ]);
    }
}
