<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    public $fillable = ['name', 'email', 'telephone', 'subject', 'message'];
    use HasFactory;
}
