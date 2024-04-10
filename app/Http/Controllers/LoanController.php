<?php

namespace App\Http\Controllers;

use App\Models\Material;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(Request $request)
    {      
        return view ('loans.index');       
    }

    public function materialLoans()
    {
        
    }
    
}
