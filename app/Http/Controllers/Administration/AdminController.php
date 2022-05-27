<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $context = [
            'titre' => 'Tableau de board | Codexnine',
        ];

        return view('administration.home' , $context);
    }

    
    public function reviews()
    {
        $context = [
            'titre' => 'Commentaire | Codexnine',
        ];

        return view('administration.reviews' , $context);
    }

    
    public function brands()
    {
        $context = [
            'titre' => 'Marques | Codexnine',
        ];

        return view('administration.brand' , $context);
    }

}
