<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Exception;
use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use App\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
 * Disable exception handling to help see clear
 * when Laravel's default exception handler
 * itself catches the exception thrown.
 */
protected function disableExceptionHandling() {
    $this->app->forgetInstance(ExceptionHandler::class);
    $this->app->instance(Handler::class, new class extends Handler {
        public function __construct() {}
        public function report(Exception $exception) {}
        public function render($request, Exception $exception)
        {
            throw $exception;
        }
    });
}

    /**
 * Helper function to log a user in.
 */
protected function login()
{
    $user = factory(User::class)->create();
    $this->actingAs($user);
}
}
