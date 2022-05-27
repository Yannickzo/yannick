<?php

namespace App\Models;

use Facade\FlareClient\Http\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeClient extends Model
{
    use HasFactory;
    function client(){
        return $this->belongsToMany(Client::class);
    }
}
