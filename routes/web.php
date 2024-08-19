<?php

use App\Http\Controllers\{
    MaterialController,
    UserController,
    CustomerController,
    LoanController,
    DashboardController,
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
Route::prefix('/admin')-> group(function(){
    Route::delete('/users/{id}',[UserController::class, 'destroy']) -> name('users.destroy');
    Route::put('/user/{id}',[UserController::class, 'update']) -> name('users.update');
    Route::get('/user/{id}/edit',[UserController::class, 'edit']) -> name('users.edit');
    Route::get('/users', [UserController::class, 'index'])-> name('users.index');
    Route::get('/users/create', [UserController::class, 'create']) -> name('users.create');
    Route::post('/users', [UserController::class, 'store']) -> name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])-> name('users.show');

    Route::get('/material/loanlist', [MaterialController::class, 'loanCustomer'])-> name('material.loans');
    Route::delete('/material{id}',[MaterialController::class, 'destroy']) -> name('materials.destroy');
    Route::put('/material/{id}',[MaterialController::class, 'update']) -> name('materials.update');
    Route::get('/material/{id}/edit', [MaterialController::class, 'edit'])-> name('materials.edit');
    Route::get('/materials', [MaterialController::class, 'index'])-> name('materials.index');
    Route::get('/material/create', [MaterialController::class, 'create'])-> name('materials.create');
    Route::post('/material', [MaterialController::class, 'store'])-> name('materials.store');
    Route::get('/material/{id}', [MaterialController::class, 'show'])-> name('materials.show');

    Route::delete('/customer/{id}',[CustomerController::class, 'destroy']) -> name('customers.destroy');
    Route::put('/customer/{id}',[CustomerController::class, 'update']) -> name('customers.update');
    Route::get('/customer/{id}/edit',[CustomerController::class, 'edit']) -> name('customers.edit');
    Route::get('/customers', [CustomerController::class, 'index'])-> name('customers.index');
    Route::get('/customer/create', [CustomerController::class, 'create']) -> name('customers.create');
    Route::post('/customer', [CustomerController::class, 'store']) -> name('customers.store');
    Route::get('/customer/{id}', [CustomerController::class, 'show'])-> name('customers.show');

    Route::get('/dashboard', [DashboardController::class, 'index'])-> name('dashboards.index');
});



Route::get('/', function () {
    return view('welcome');
});
