<?php

use App\Http\Controllers\{
    MaterialController,
    UserController,
    CustomerController,   
    DashboardController,
    LoanController,
};
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::delete('/user/{id}',[UserController::class, 'destroy']) -> name('users.destroy');
Route::put('/user/{id}',[UserController::class, 'update']) -> name('users.update');
Route::get('/user/{id}/edit',[UserController::class, 'edit']) -> name('users.edit');
Route::get('/user', [UserController::class, 'index'])-> name('users.index');
Route::get('/user/create', [UserController::class, 'create']) -> name('users.create');
Route::post('/user', [UserController::class, 'store']) -> name('users.store');
Route::get('/user/{id}', [UserController::class, 'show'])-> name('users.show');

Route::delete('/material{id}',[MaterialController::class, 'destroy']) -> name('materials.destroy');
Route::put('/material/{id}',[MaterialController::class, 'update']) -> name('materials.update');
Route::get('/material/{id}/edit', [MaterialController::class, 'edit'])-> name('materials.edit');
Route::get('/material', [MaterialController::class, 'index'])-> name('materials.index');
Route::get('/material/create', [MaterialController::class, 'create'])-> name('materials.create');
Route::post('/material', [MaterialController::class, 'store'])-> name('materials.store');
Route::get('/material/{id}', [MaterialController::class, 'show'])-> name('materials.show');

Route::delete('/customer/{id}',[CustomerController::class, 'destroy']) -> name('customers.destroy');
Route::put('/customer/{id}',[CustomerController::class, 'update']) -> name('customers.update');
Route::get('/customer/{id}/edit',[CustomerController::class, 'edit']) -> name('customers.edit');
Route::get('/customer', [CustomerController::class, 'index'])-> name('customers.index');
Route::get('/customer/create', [CustomerController::class, 'create']) -> name('customers.create');
Route::post('/customer', [CustomerController::class, 'store']) -> name('customers.store');
Route::get('/customer/{id}', [CustomerController::class, 'show'])-> name('customers.show');

Route::get('/loan', [LoanController::class, 'index']) -> name('loan.index'); 
Route::get('/loan/create/', [LoanController::class, 'create']) -> name('loan.create'); 
Route::post('/loan', [LoanController::class, 'store']) -> name('loan.store');
//Route::get('/register', [RegisterController::class, 'store']) -> name('registers.store'); 
Route::post('/loan/loanmaterial/', [LoanController::class, 'loanMaterial']) -> name('loan.loanmaterial'); 

//Route::get('/retorn', [Controller::class, 'index']) -> name('retorn.index'); 

Route::get('/dashboard', [DashboardController::class, 'index'])-> name('dashboards.index');


Route::get('/', function () {
    return view('welcome');
});
