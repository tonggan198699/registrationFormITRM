<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
 * Helper function to log a user in.
 */
protected function login()
{
    $user = factory(User::class)->create();
    $this->actingAs($user);
}
}
