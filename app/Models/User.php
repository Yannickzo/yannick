<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nom_client',
        'prenom_client',
        'numero_cnib',
        'date_cnib',
        'date_naissance',
        'lieu_naissance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    function compteFournisseur(){
        return $this->hasOne(CompteFournisseur::class);
    }
    function compteLivreur(){
        return $this->hasOne(CompteLivreur::class);
    }
    function adresses(){
        return $this->hasMany(Adresse::class);
    }
    function cart(){
        return $this->hasOne(Cart::class);
    }
    function type(){
        return $this->hasOne(TypeClient::class);
    }
    function payement(){
        return $this->hasMany(AdressePayement::class);
    }
}
