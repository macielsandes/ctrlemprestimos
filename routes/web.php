<?php

use App\Http\Controllers\{
    MaterialController,
    UserController,
    CustomerController,   
    DashboardController,
    DevolutionController,
    LoanController,
};
use App\Models\Loan;
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

Route::put('/loan/{id}',[LoanController::class, 'update']) -> name('loans.update');
Route::get('/loan/{id}/', [LoanController::class, 'edit']) -> name('loans.edit');
Route::get('/loan', [LoanController::class, 'index']) -> name('loans.index');
Route::get('/loan/create', [LoanController::class, 'create']) -> name('loans.create'); 
Route::post('/loan', [LoanController::class, 'store']) -> name('loans.store');

//Route::get('/devolution/{id}',[DevolutionController::class, 'update']) -> name('devolutions.update');
Route::get('/devolution/{$id}/edit', [DevolutionController::class, 'edit']) -> name('devolutions.edit');
Route::get('/devolution', [DevolutionController::class, 'index']) -> name('devolutions.index');
Route::get('/devolution/create', [DevolutionController::class, 'create']) -> name('devolutions.create');


Route::get('/dashboard', [DashboardController::class, 'index'])-> name('dashboards.index');

Route::get('/', function () {
    return view('welcome');
});
