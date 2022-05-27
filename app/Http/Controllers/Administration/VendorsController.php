<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    
    public function vendor()
    {
        $context = [
            'titre' => 'Agents Commerciaux | Codexnine',
        ];

        return view('administration.vendors' , $context);
    }

    public function vendorProfile()
    {
        $context = [
            'titre' => 'Profile Agent Commercial',
        ];

        return view('administration.vendor-profil' , $context);
    }

}
