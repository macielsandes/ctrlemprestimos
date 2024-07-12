<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Customer;

/**
 * Controle responsavel por gerenciar toda a parte de emprestimo de material
 *
 */
class LoanController extends Controller
{
     //Controle da pagina inicial
    public function index()
    {
        //$material = Material::with('customers')->find(1);
        //dd($material->customers);

        $customer = Customer::with('Materials')->find(1);
        $customers->material;

       // return view('admin.loans.index', compact('materials'));

    }

    //registra emprestimo de material
    public function register()
    {
        //recupera materiais cadastrados
        $materials = Material::orderby('name', 'asc')->get();

        //recuperar clientes cadastros
        $customers = Customer::orderby('username', 'asc')->get();

        return view('admin.loans.register', compact('materials', 'customers'));
    }

    //registra devolução de material
    public function devolution()
    {
        //recupera materiais cadastrados
        //loan = new loan();

        //recupera materiais cadastrados
        $materials = Material::orderby('name', 'asc')->get();

        //recuperar clientes cadastros
        $customers = Customer::orderby('username', 'asc')->get();

        return view('admin.loans.devolution');
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
  /*public function store(Request $request)
  {
    $material->

    $material->id

    $loan ->save();

    //return view('loans.index', compact('loans'));

    return view('admin.loans.register');
  }*/
}

