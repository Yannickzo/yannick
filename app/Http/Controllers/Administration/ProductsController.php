<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function produits()
    {
        $context = [
            'titre' => 'Produits | Codexnine',
        ];

        return view('administration.products' , $context);
    }

    public function ajouterProduit()
    {
        $context = [
            'titre' => 'Nouveau produit | Codexnine',
        ];

        return view('administration.product-new' , $context);
    }

    public function detailProduit()
    {
        $context = [
            'titre' => 'Detail produit | Codexnine',
        ];

        return view('administration.product-detail' , $context);
    }

    public function categorie()
    {
        $context = [
            'titre' => 'Detail produit | Codexnine',
        ];

        return view('administration.category' , $context);
    }

    public function sousCategorie()
    {
        $context = [
            'titre' => 'Detail produit | Codexnine',
        ];

        return view('administration.category-sub' , $context);
    }
}
