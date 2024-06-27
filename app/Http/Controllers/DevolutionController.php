<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Loan;
use App\Models\Material;
use App\Models\Customer;

class DevolutionController extends Controller
{

    public function index(Request $request)
    {
        $loans = Loan::all();
        return view('devolutions.index', compact('loans'));
    }

    //função que registra devolução de material
    public function devolutionReturn(Request $request){
        $loan = Loan::all();
        dd($loan->material_id = $request->material);

    }
}
