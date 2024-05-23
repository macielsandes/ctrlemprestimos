<?php

namespace App\Http\Controllers;


use App\Models\Material;
use App\Models\Customer;
use App\Models\
use Illuminate\Http\Request;

class RegisterController extends Controller
{
         
      public function index(){
        emprestimo = 
       return view('registers.index', ['materiais' => $materiais, 'customers' => $customers]);
    }
    
    public function create(){        
        //recuperar materiais cadastrados 
        $materiais = Material::orderby('name', 'asc')->get();
        //recuperar clientes cadastros
        $customers = Customer::orderby('name', 'asc')->get();
        
        return view('registers.create', ['materiais' => $materiais, 'customers' => $customers]);
    }

   public function store($materiais, $customers){
        
        $material = Material::find($material_id);
        $customer = Customer::all();

     }

    //Registrar emprestimos

    //Mostrar itens emprestados


    //registrar devolução 
 
}

