<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Material;
use App\Models\Customer;

class DevolutionController extends Controller{

    public function index(Request $request)
    {

      $loans = Loan::with(['material', 'customer'])->get();

      //$loans= Loan::with('material_id', 'customer_id' )->get();
       return view('devolutions.index', compact('loans'));
    }

  public function create(Request $request)
    {

      //$materials

      //return view('devolutions.create', compact('materials', 'customers'));
    }

  public function store (Request $request){
    $devolutions = new Loan;


  }

  //carrega formulario de deloução de emprestimo
  public function edit($id)
  {
    $loans = Loan::all();

    if($loans = Loan::find($id))
      return redirect()->route('devolutions.index');

    return view('devolutions.edit', compact('loans'));
  }

  /**public function update(Request $request, $id){

    $loans = Loan::all();
    $materials = Material::all();

    $loans ->material_id = $request->material;
    $loans ->customer_id = $request->customer;
    $loans ->save();
  }*/

}
