<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    function client(){
        return $this->belongsTo(User::class);
    }
    function commande(){
        return $this->hasOne(Commande::class);
    }
}
