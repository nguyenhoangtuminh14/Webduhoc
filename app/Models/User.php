<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable; 

class User extends Authenticatable 
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->password = bcrypt($user->password);
        });
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
