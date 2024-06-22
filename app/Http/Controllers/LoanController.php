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

   //Controle da pagina incial de emprestimo
  public function index(Request $request)
  {
    //instacia a classe material
    $materials = Material::all();

    //$materials = Material::orderby('id', 'asc')->get();
    //return view('loans.index', compact('loans'));

    return view('loans.index', compact('materials'));
  }

  public function create()
  {
    //$materials = new Material;
    //$customers = new Customer;

    //recupera materiais cadastrados
   dd($materials = Material::orderby('name', 'asc')->get());

    //recuperar clientes cadastros
    //$customers = Customer::orderby('username', 'asc')->get();

    //return view('loans.create', compact('materials', 'customers'));
  }

  // Função responsavel por salvar emrpestimo
  public function store(Request $request)
  {
    $loans = new Loan;
    $materials = Material::all();

    $loans ->material_id = $request->material;
    $loans ->customer_id = $request->customer;
    $loans ->save();

    //return view('loans.index', compact('loans'));

    return view('loans.index', compact('materials'));

  }

  public function edit($id)
  {
    //$materials = new Material();
    $materials = Material::all();

    if (!$materials = Material::find($id))
      return redirect()->route('loans.index');

    return view('loans.edit', compact('materials'));
  }

  //function quantydeMaterial()
}
