<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorx;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\IngresoController;

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

Route::get('/', function () {
    return view('welcome');
});


//Route::Resou('almacen/categoria', 'Controladorx');
//Route::resource('almacen/categoria', Controladorx::class);
Route::resource('almacen/categoria', CategoriaController::class);
Route::resource('almacen/articulo', ArticuloController::class);
Route::resource('ventas/cliente', ClienteController::class);
Route::resource('compras/proveedor', ProveedorController::class);
Route::resource('compras/ingreso', IngresoController::class);
Route::get('almacen/categoria/{id}/edit', 'CategoriaController@edit')->name('categoria.edit');
Route::get('almacen/articulo/{id}/edit', 'ArticuloController@edit')->name('articulo.edit');
Route::get('ventas/cliente/{id}/edit', 'ClienteController@edit')->name('cliente.edit');

//Route::delete('/categoria/{id}', 'CategoriaController@destroy')->name('categoria.destroy');

