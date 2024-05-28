<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Material;
use App\Models\Customer;

class LoanController extends Controller
{
    // Direciona para pagina inicial   
    
    public function index(){

        $loans= Loan::all();
        
        //return view('loan.index', compact('loanMaterial'));  
        
        return view('loan.index', compact('loans'));    
       
     }
     
     public function create(){        
        
        //$material = new Material();
        //$customer = new Customer();
        
        //recuperar materiais cadastrados 
        $materials = Material::orderby('name', 'asc')->get();

        //$material = Material->get();
         
         //recuperar clientes cadastros
         $customers = Customer::orderby('fistname', 'asc')->get();
         
        //return view('loan.create', ['materiais' => $materiais, 'customers' => $customers]);
 
         return view('loan.create', compact ('materials','customers'));
     } 
    
 
   public function store(Request $request){

        $loan =new Loan;
               
        $loan->material_id = $request->material;
        $loan->customer_id = $request->customer;
        $loan->save();

        return view('loan.index');    
 
      }
 
     //Registrar emprestimos
 
     //Mostrar itens emprestados
 
 
     //registrar devolução 
  
}
