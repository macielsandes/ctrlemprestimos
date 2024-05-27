<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Loan;
use app\Models\Material;
use app\Models\Customer;

class LoanController extends Controller
{
    // Direciona para pagina inicial   
    
    public function index(){

        //$loan= Loan::all();
        
        //return view('loan.index', compact('loanMaterial'));  
        
        return view('loan.index');    
       
     }
     
     public function create(){        
        
         //recuperar materiais cadastrados 
         $materials = loanMaterial::orderby('name', 'asc')->get();
         
         //recuperar clientes cadastros
         $customers = Customer::orderby('name', 'asc')->get();
         
         //return view('loan.create', ['materiais' => $materiais, 'customers' => $customers]);
 
         return view('loan.create', compact ('materials','customers'));
     }
 
     /*public function loanMaterial($idMaterial, $idCustomer){
         
         $material->materials()->attach($idMaterial);
 
         return redirect('loan.index');
     }*/
 
 
   /* public function store($materiais, $customers){
         
         $material = Material::find($material_id);
         $customer = Customer::all();
 
 
 
 
      }*/
 
     //Registrar emprestimos
 
     //Mostrar itens emprestados
 
 
     //registrar devolução 
  
}
