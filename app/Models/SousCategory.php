<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategory extends Model
{
    use HasFactory;
    function categorie(){
        return $this->belongsTo(Category::class);
    }
    function produits(){
        return $this->hasMany(Produit::class);
    }
}
