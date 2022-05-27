<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $context = [
            'titre' => 'Accueil | Codexnine',
        ];

        return view('accueil' , $context);
    }

    public function contact()
    {
        $context = [
            'titre' => 'Contact | Codexnine',
            'breadcrumb' => 'Contact'
        ];

        return view('contact' , $context);
    }

    public function a_propos()
    {
        $context = [
            'titre' => 'A propos | Codexnine',
            'breadcrumb' => 'A propos de nous'
        ];

        return view('a_propos' , $context);
    }

    public function vendor()
    {
        $context = [
            'titre' => 'Vendeurs | Codexnine',
            'breadcrumb' => 'Nos vendeurs'
        ];

        return view('boutique.vendeurs' , $context);
    }

    public function singleVendor()
    {
        $context = [
            'titre' => 'Vendeur x | Codexnine',
            'breadcrumb' => 'Vendeur x'
        ];

        return view('boutique.vendeur' , $context);
    }
    

}
