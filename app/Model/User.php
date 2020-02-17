<?php

namespace App\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Model
{
    //

     use Notifiable;

      protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


     protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
