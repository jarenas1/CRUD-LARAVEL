<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.   CREAMOS LOS ATRIBUTOS QUE TENDRA EL USUARIO
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'names',
        'lastnames',
        'email',
        'password',
        'adress',
    ];
}