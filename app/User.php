<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Constantes Necesarias
    const TYPE_ADMIN = 'admin';
    const TYPE_INCENTIVADORA = 'incentivadora';
    const TYPE_REDENTORA = 'redentora';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Guardar los datos en minuscula
    public function setNameAttribute( $value ) {
       $this->attributes['name'] = strtolower( $value );
    }

    public function setEmailAttribute( $value ) {
       $this->attributes['email'] = strtolower( $value );
    }

    // Recuperar los datos capitalizados
    public function getNameAttribute( $value ) {
       return ucwords( $value );
    }

    public function isAdmin() {
        return $this->type === User::TYPE_ADMIN;
    }
}
