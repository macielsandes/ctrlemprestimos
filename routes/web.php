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
