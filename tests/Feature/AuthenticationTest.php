<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_login_with_correct_credentails(): void
    {
        $user = User::factory()->create([
            'email' => 'mohammadatif2468@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $response = $this->post('/login', [
            'email' => 'mohammadatif2468@gmail.com',
            'password' => '12345678',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function a_user_cannot_login_with_wrong_credentials()
    {
        $response = $this->post('/login', [
            'email' => 'mohammadatif2468@gmail.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertSessionHasErrors('email'); // Error message check karein
        $this->assertGuest(); // Ensure user is not logged in
    }
}
