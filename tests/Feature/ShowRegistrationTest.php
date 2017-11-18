<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowRegistrationTest extends TestCase
{
        /** @test */
    public function user_will_be_relocate_to_login_url_when_not_authenticated()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertDontSee("Welcome to the login page");
        $this->assertTrue($response->isRedirect(url('login')));

    }
}
