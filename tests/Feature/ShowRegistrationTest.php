<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowRegistrationTest extends TestCase
{
        /** @test */
    public function user_can_hit_the_url_and_see_the_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee("Welcome to the login page");
        $response->assertDontSee("This is a random page");
    }
}
