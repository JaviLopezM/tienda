<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'last_name', 'password', 'user', 'role', 'verified', 'active', 'address', 'locality', 'postal', 'name2', 'last_name2', 'address2', 'locality2', 'postal2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot(){
        parent::boot();

        static::creating(function ($user) {
            $user->token = str_random(40);
        });
    }
    public function hasVerified(){
        $this->verified = true;
        $this->token = null;
        $this->save();
    }
}
