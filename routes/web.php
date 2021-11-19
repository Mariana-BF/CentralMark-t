<?php

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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Route::view('/', 'welcome')->name('bienvenida');
Route::view('/carrito', 'carrito')->name('carrito');
Route::view('/vendedor', 'vendedor')->name('vendedor');
Route::view('/cliente', 'cliente')->name('cliente');


Auth::routes();