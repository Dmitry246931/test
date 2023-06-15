<?php

//use App\Http\Controllers\dynamicdependetController;

//use App\Http\Controllers\DropdownController;

//use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main' );

Route::resource('users',\App\Http\Controllers\UserController::class);

Route::get('/crete/{user}', [\App\Http\Controllers\AutoController::class, 'create'])->name('autos.create');
Route::post('/store/{user}', [\App\Http\Controllers\AutoController::class, 'store'])->name('autos.store');
Route::delete('/autos/delete/{user_id}', [\App\Http\Controllers\AutoController::class, 'destroy'])->name('autos.destroy');
Route::get('/edit/{auto}', [\App\Http\Controllers\AutoController::class, 'edit'])->name('ss');
Route::put('/update/update/{auto}', [\App\Http\Controllers\AutoController::class, 'update'])->name('autos.update');
Route::get('/home', [ \App\Http\Controllers\DropdownController::class, 'index' ])->name('park');
Route::get('/dropdown-data',[\App\Http\Controllers\DropdownController::class, 'data']);
Route::post('/dropdown',[\App\Http\Controllers\DropdownController::class, 'auto'])->name('auto');
Route::get('/dropdown-out/{avt}',[\App\Http\Controllers\DropdownController::class, 'auto_out'])->name('auto_out');
