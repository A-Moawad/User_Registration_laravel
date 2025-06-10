<?php

namespace Tests\Feature;
use App\Models\User; 

use Illuminate\Foundation\Testing\RefreshDatabase; 
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase; //reset database after each test

    /**
     * Test that a new user can register successfully.
     *
     * @return void
     */
    public function skip_test_new_user_register_successfully(): void
    {
        //POST request to registration route
        $response = $this->post('/register', [
            'full_name' => 'Test User Full',
            'user_name' => 'testuser123',
            'email'     => 'test@example.com',
            'whatsapp_number' => '201234567891',
            'phone'     => '1234567890',
            'address'   => '123 Test Street',
            'password'  => 'password123',
            'password_confirmation' => 'password123',
        ]);

        

        //check user was created in the database
        $this->assertDatabaseHas('users', [
            'phone' => '1234567890',
        ]);

        //that the page redirected successfully
        $response->assertStatus(302);

        //session has the success message 
        $response->assertSessionHas('success', 'Insertion performed successfully');
    }

    public function test_registration_page_correctly(): void
{
    $response = $this->get('/register');
    $response->assertStatus(200);
}

public function test_registration_fails_with_invalid_email(): void
{
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'not-an-email', 
        'password' => 'password123',
        
    ]);
    $response->assertSessionHasErrors('email');
}

public function test_registration_fails_when_password_short(): void
{
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => '123',
    ]);
    $response->assertSessionHasErrors('password');
}
    public function test_registration_fails_when_passwords_do_not_match(): void
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'password' => 'password123',
            'password_confirmation' => 'differentpassword',
        ]);
        $response->assertSessionHasErrors('password');}

}