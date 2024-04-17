<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function loan($id){
       
        $material -> customers()->attach($id);        
       
        return view ('loans.index'); 

    }
}