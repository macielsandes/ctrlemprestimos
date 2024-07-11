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
        return view('admin.loans.index', compact('loans'));
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
        $loans = Loan::all();

        return view('admin.loans.devolution', compact('loans'));
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

    return view('admin.loans.register', compact('loan'));
  }
}

