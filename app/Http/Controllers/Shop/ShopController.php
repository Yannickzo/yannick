<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $context = [
            'titre' => 'Boutique | Codexnine',
            'breadcrumb' => 'Boutique',
        ];

        return view('boutique.boutique' , $context);
    }

    public function singleProduct(string $product_id)
    {
        $context = [
            'titre' => 'Nom produit | Codexnine',
            'breadcrumb' => 'Nom produit',
        ];

        return view('boutique.single_product' , $context);
    }

    public function panier()
    {
        $context = [
            'titre' => 'Panier | Codexnine',
            'breadcrumb' => 'Panier',
        ];

        return view('boutique.panier' , $context);
    }

    public function checkout()
    {
        $context = [
            'titre' => 'Checkout | Codexnine',
            'breadcrumb' => 'Checkout',
        ];

        return view('boutique.checkout' , $context);
    }

    public function liste_souhait()
    {
        $context = [
            'titre' => 'Liste de souhait | Codexnine',
            'breadcrumb' => 'Liste de souhait',
        ];

        return view('boutique.liste_souhait' , $context);
    }
}
