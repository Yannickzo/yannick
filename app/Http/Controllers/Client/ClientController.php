<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $context = [
            'titre' => 'Tableau de bord Client | Codexnine',
            'breadcrumb' => 'Tableau de bord'
        ];

        return view('compte.compte_client' , $context);
    }
}
