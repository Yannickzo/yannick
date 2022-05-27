<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    function client(){
        return $this->belongsTo(User::class);
    }
    function produit(){
        return $this->belongsTo(Produit::class);
    }
}
