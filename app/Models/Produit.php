<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;

    function categorie(){
        return $this->belongsTo(SousCategory::class);
    }
    function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    function coupons()
    {
        return $this->hasMany(Coupon::class);
    }
}
