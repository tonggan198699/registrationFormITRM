<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationRequiresAuthenticationTest extends TestCase
{
        /** @test */
    public function it_restricts_access_to_the_application_to_authenticated_users_only()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertDontSee("Welcome to the login page");
        $this->assertTrue($response->isRedirect(url('login')));

    }

        /** @test */
    public function it_enables_logged_in_users_to_access_the_inner_pages()
    {
        $this->login();

        $response = $this->get('/home');
        $response->assertStatus(200);
        $this->assertNotNull(auth()->user());
        $this->assertFalse($response->isRedirection());
    }
}
