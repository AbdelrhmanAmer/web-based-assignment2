<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class WebRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function testGetLoginRoute()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testGetRegisterRoute()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testGetLogoutRoute()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/logout');
        $response->assertStatus(302); // Redirect to home page after logout
        $response->assertRedirect('/');
    }

    public function testPostLoginRoute()
    {
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password'
        ]);
        $response->assertStatus(302); // Assuming login redirects after successful
    }

    public function testPostRegisterRoute()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);
        $response->assertStatus(302); // Assuming registration redirects after successful
    }

    public function testGetHomeRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200); //Test the '/' route to check it returns status 200 and renders the welcome view.
        $response->assertViewIs('welcome');
    }

    public function testGetActorsIdsRoute()
    {
        $date = '2024-01-01';
        $response = $this->get('/actors_ids/' . $date); // to check if it returns status 200 or nothing
        $response->assertStatus(200);
    }
}
