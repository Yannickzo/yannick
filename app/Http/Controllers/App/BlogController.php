<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $context = [
            'titre' => 'Blog | Codexnine',
            'breadcrumb' => 'Nos articles'
        ];

        return view('blog.articles' , $context);
    }
}
