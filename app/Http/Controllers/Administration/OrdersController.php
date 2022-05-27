<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function commandes()
    {
        $context = [
            'titre' => 'Commandes | Codexnine',
        ];

        return view('administration.orders' , $context);
    }


    public function ajoutCommande()
    {
        $context = [
            'titre' => 'Nouvelle Commande | Codexnine',
        ];

        return view('administration.order-new' , $context);
    }


    public function historiqueCommande()
    {
        $context = [
            'titre' => 'Historiques des Commandes | Codexnine',
        ];

        return view('administration.order-historique' , $context);
    }


    public function detailCommande()
    {
        $context = [
            'titre' => 'Détail des Commandes | Codexnine',
        ];

        return view('administration.order-detail' , $context);
    }

    public function invoice()
    {
        $context = [
            'titre' => 'Facture | Codexnine',
        ];

        return view('administration.invoice' , $context);
    }
}
