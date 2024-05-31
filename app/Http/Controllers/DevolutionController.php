<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Loan;

class DevolutionController extends Controller
{

    public function index(Request $request)
    {
        $loans = Loan::all();
        return view('devolutions.index', compact('loans'));
    }
}
