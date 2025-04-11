<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Personel extends Authenticatable
{
    protected $table = 'personels'; 
    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'adrees', 'N°_cart', 'N°_passport', 'image_chemain'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
