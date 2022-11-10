<?php
use App\Http\Controllers\ControladorComics;
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
Route::view('2','catalogo');
Route::view('3','pedidos_catalogo');
Route::view('4','carrito');
Route::view('5','catalogo');
Route::view('21','Alta_Articulo')->name("21");;
Route::view('22','Alta_Comics')->name("22");
Route::view('23','Editar_Comics')->name("23");;
Route::view('24','Editar_Articulo')->name("24");
Route::view('12','Alta_Proveedor')->name("12");
Route::view('13','Editar_Proveedor')->name("13");
Route::view('31','Alta_Pedidos');
Route::view('32','Editar_Pedidos');
Route::view('6','catalogo2');



Route::get('/', function () {
    return view('Plantilla_1');
});

Route::post('AltaArticulo',[ControladorComics::class,'validacion1']);
Route::post('AltaArticulo2',[ControladorComics::class,'validacion2']);
Route::post('Comics1',[ControladorComics::class,'validacion3']);
Route::post('Comics2',[ControladorComics::class,'validacion4']);
Route::post('Proveedor1',[ControladorComics::class,'validacion5']);
Route::post('Proveedor2',[ControladorComics::class,'validacion6']);
