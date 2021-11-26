<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferenciaController extends Controller
{
    
    public function store(){
        
        return view('add_preferencia');
    }

}
