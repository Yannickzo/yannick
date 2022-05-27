<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    function adresseLivraison(){
        return $this->hasOne(Adresse::class);
    }
    function commande(){
        return $this->hasOne(Commande::class);
    }
}
