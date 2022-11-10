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
*/
Route::view('1','Proveedor_Catalogo');
Route::view('2','catalogo_articulos');
Route::view('3','pedidos_catalogo');
Route::view('4','carrito');
Route::view('5','catalogo_comics');

Route::get('/', function () {
    return view('Plantilla_1');
});

Route::get('catalogos',function(){
    return view('catalogos');
})->name('cat');