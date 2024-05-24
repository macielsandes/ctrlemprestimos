<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Customer;
use App\Models\Loan_Material;

class LoanMaterialController extends Controller
{
    /*public function __construct(Loan_Material $loanMaterial)
    {
        this->model = $loanMaterial;
    }*/

    public function index(){
       
       //$loanMaterials = Loan_Material::all();
       
       //return view('loan.index', compact('loanMaterials'));

       return view('loan.index');

       /**
        * Para passar mais de uma variavel para a interface
        *$material = "Caderno";
        *$customer =  'Maciel';
        *       
        *return view('loan.index', ['materiais' => $materiais, 'customers' => $customers]))       
        */

        // outra forma de passar a informação pra View
        //return view('loan.index', compact ('material', 'usuarios'));
        
    }
    
    public function register(){        
        //recuperar materiais cadastrados 
        $materials = Material::orderby('name', 'asc')->get();
        //recuperar clientes cadastros
        $customers = Customer::orderby('name', 'asc')->get();
        
        //return view('loan.create', ['materiais' => $materiais, 'customers' => $customers]);

        return view('loan.register', compact ('materials','customers'));


         //return view('loan.index', compact ('material', 'usuarios'));
        
    }

    public function loanMaterial($id){
        $material= Material::isUnguarded();

        $material-> customers()->attach($id);

        return redirect('loan.index');
    }


  /* public function store($materiais, $customers){
        
        $material = Material::find($material_id);
        $customer = Customer::all();




     }*/

    //Registrar emprestimos

    //Mostrar itens emprestados


    //registrar devolução 
 
}
