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
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }

    //função que envia o usuario para seleção de material
    public function register()
    {
        //recupera materiais cadastrados
        $materials = Material::orderby('name', 'asc')->get();

        //recuperar clientes cadastros
        $customers = Customer::orderby('username', 'asc')->get();

        return view('loans.register', compact('materials', 'customers'));
    }

    //Registra emprestimo de materiais
    public function devolution()
    {
        //recupera materiais cadastrados
       // $loans = Loan::all();

        return view('loans.devolution');
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
    $loan = new Loan();
    $loan ->material_id = $request->material;
    $loan ->customer_id = $request->customer;
    $loan ->save();

    //return view('loans.index', compact('loans'));

    return view('loans.register', compact('loan'));
  }
}

