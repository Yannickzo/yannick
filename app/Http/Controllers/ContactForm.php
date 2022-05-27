<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactForm extends Controller
{
    //affichage du formulaire contact
    public function createform(Request $request){
        return view();
    }
    public function contactform(Request $request){
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email',
            'telephone'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'subject'=> 'required',
            'message'=> 'required',
        ]);
        'App\Models\ContactForm'::create($request->all());
        return redirect('/contact')->with('sucessfull');
    }
}