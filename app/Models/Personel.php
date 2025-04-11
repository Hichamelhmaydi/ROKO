<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class Personel extends Authenticatable implements JWTSubject{
    use HasFactory;
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
