<?php

namespace App\Http\Controllers;


use App\Models\Material;
use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
       return view('registers.index');
    }

    
    public function create(){       
       
        return view('registers.create');

    }

    public function store(){

         //continuar a partir daqui  

    }

    //Registrar emprestimos

    //Mostrar itens emprestados


    //registrar devolução 
 
}

