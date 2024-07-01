<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Material;
use App\Models\Customer;

/**
 * Controle responsavel por gerenciar toda a parte de emprestimo de material
 *
 */
class LoanController extends Controller
{

    //Envio usuario para a tela de emprestimo
    public function loanRegister()
    {
        //recupera materiais cadastrados
        $materials = Material::orderby('name', 'asc')->get();

        //recuperar clientes cadastros
        $customers = Customer::orderby('username', 'asc')->get();

        return view('loans.register', compact('materials', 'customers'));
    }

    //Registra emprestimo de materiais
    public function loanDevolution()
    {
        //recupera materiais cadastrados
        $materials = Material::orderby('name', 'asc')->get();

        //recuperar clientes cadastros
        $customers = Customer::orderby('username', 'asc')->get();

        return view('loans.devolution', compact('materials', 'customers'));
    }

    /* public function create()
  {
   //recupera materiais cadastrados
   $material = Material::orderby('name', 'asc')->get();

    //recuperar clientes cadastros
   $customer = Customer::orderby('username', 'asc')->get();

    return view('loans.create', compact('material', 'customer'));
  }*/

  //registra emprestimo no banco e dedos
  public function store(Request $request)
  {
    $loans = new Loan();
    $loans ->material_id = $request->material;
    $loans ->customer_id = $request->customer;
    $loans ->save();

    //return view('loans.index', compact('loans'));

    return view('loans.register');

  }

  /*public function edit($id)
  {

    if (!$loan = Loan::find($id))
      return redirect()->route('loans.index');

    return view('loans.edit', compact('loan'));
  }

  //function quantydeMaterial()*/
}
