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
  protected $model;

  //Contrutor da classe
  public function ___construct(Loan $loan)
  {
    $this->model = $loan;
  }

  //Controle da pagina inicial
  public function index(Request $request)
  {
    $loans = Loan::all();

    return view('loans.index', compact('loans'));
  }

  public function create()
  {

    //recupera materiais cadastrados 
    $materials = Material::orderby('name', 'asc')->get();

    //recuperar clientes cadastros
    $customers = Customer::orderby('username', 'asc')->get();

    return view('loans.create', compact('materials', 'customers'));
  }

  // Função responsavel por salvar emrpestimo
  public function store(Request $request)
  {
    $loan = new Loan;
    $loan->material_id = $request->material;
    $loan->customer_id = $request->customer;
    $loan->save();

    return view('loans.index', compact('loans'));
  }

  public function edit($id)
  {
    if (!$loan= Loan::find($id))
      return redirect()->route('loans.index');

    return view('loans.edit', compact('loan'));
  }
 
}
