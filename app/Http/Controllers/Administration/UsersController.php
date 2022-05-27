<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        $context = [
            'titre' => 'Utilisateurs',
        ];

        return view('administration.users' , $context);
    }

    public function userProfile()
    {
        $context = [
            'titre' => 'Profile Client',
        ];

        return view('administration.user-profil' , $context);
    }
}
