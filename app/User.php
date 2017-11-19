<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    const UK_DATE_FORMAT = 'd-m-Y';

    /**
    * @var array
    */
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'surname',
        'forename',
        'dob',
        'gender',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    * @return array
    */
    public function getDates()
    {
        return ['created_at', 'updated_at', 'dob'];
    }

    public function dob()
    {
        return $this->dob ? $this->dob->format(self::UK_DATE_FORMAT) : null;
    }

}
