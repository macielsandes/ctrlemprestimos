<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Material;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all()->count();
        $materials = Material::all()->count();

        return view ('admin.index', compact('users', 'materials'));
    }
}
