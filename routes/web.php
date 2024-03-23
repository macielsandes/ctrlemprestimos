<?php

use App\Http\Controllers\{
    MaterialController,
    UserController,
};

use Illuminate\Support\Facades\Route;

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


Route::delete('/material{id}',[MaterialController::class, 'destroy']) -> name('materiais.destroy');
Route::put('/material/{id}',[MaterialController::class, 'update']) -> name('materiais.update');
Route::get('/material/{id}/edit', [MaterialController::class, 'edit'])-> name('materiais.edit');
Route::get('/material', [MaterialController::class, 'index'])-> name('materiais.index');
Route::get('/material/create', [MaterialController::class, 'create'])-> name('materiais.create');
Route::post('/material', [MaterialController::class, 'store'])-> name('materiais.store');
Route::get('/material/{id}', [MaterialController::class, 'show'])-> name('materiais.show');

Route::get('/', function () {
    return view('welcome');
});
