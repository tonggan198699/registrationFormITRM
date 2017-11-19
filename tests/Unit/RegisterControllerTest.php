<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Validation\ValidationException;

class RegisterControllerTest extends TestCase
{

  use RefreshDatabase;

  /** @test */
  public function user_registration_can_be_completed()
  {
    $user = factory(User::class)->create([
        'title' => 'mr',
        'forename' => 'testForename',
        'surname' => 'testSurname',
        'dob' => '2010-10-10',
        'gender' => 'male',
        'email' => 'test@example.com',
        'password' => 'secret',
    ]);

    $user->save();

    $this->assertDatabaseHas('users', [
      'title' => 'mr',
      'forename' => 'testForename',
      'surname' => 'testSurname',
      'dob' => '2010-10-10',
      'gender' => 'male',
      'email' => 'test@example.com',
      'password' => 'secret',
    ]);
  }

  /** @test */
  public function it_requires_the_email_field_to_complete_the_registration()
  {
      $this->disableExceptionHandling();
      try {
          $response = $this->post('register', [
          'email' => null,
          ]);
      } catch (ValidationException $e) {
          $this->assertDatabaseMissing('users', ['email' => 'test@example.com']);
          return;
      }
      $this->fail('email should have been required to pass validation!!!');
  }

  /** @test */
  public function it_requires_the_password_field_to_complete_the_registration()
  {
      $this->disableExceptionHandling();
      try {
          $response = $this->post('register', [
          'email' => 'test@example.com',
          'password' => null
          ]);
      } catch (ValidationException $e) {
          $this->assertDatabaseMissing('users', ['password' => 'secret']);
          return;
      }
      $this->fail('password should have been required to pass validation!!!');
  }

  /** @test */
  public function title_and_gender_fields_by_default_will_be_mr_and_male_if_left_empty()
  {
    $user = factory(User::class)->create([
        'forename' => null,
        'surname' => null,
        'dob' => null,
        'email' => 'test@example.com',
        'password' => 'secret',
    ]);

    $user->save();

    $this->assertDatabaseHas('users', [
      'title' => 'mr',
      'gender' => 'male',
      'email' => 'test@example.com',
      'password' => 'secret',
    ]);
  }

  /** @test */
  public function email_entry_must_be_unique()
  {
    $this->disableExceptionHandling();
    try {
        $response1 = $this->post('register', [
        'email' => 'test@example.com',
        'password' => 'secret'
        ]);
        $response2 = $this->post('register', [
        'email' => 'test@example.com',
        'password' => 'secret'
        ]);
    } catch (ValidationException $e) {
        $this->assertDatabaseMissing('users', ['email' => 'test@example.com']);
        return;
    }
    $this->fail('password should have been required to pass validation!!!');
  }

}
