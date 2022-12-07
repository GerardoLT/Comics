<?php
use App\Http\Controllers\ControladorPedidos;
use App\Http\Controllers\ControladorComics;
use App\Http\Controllers\ControladorArticulos;
use App\Http\Controllers\ControladorComic;
use App\Http\Controllers\ControladorProveedor;
use App\Http\Controllers\controllerLogin;
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
Route::view('4','carrito');
Route::view('5','catalogo');
//Route::view('21','Alta_Articulo')->name("21");;
//Route::view('22','Alta_Comics')->name("22");
Route::view('33','Alta_Pedidos')->name("33");
Route::view('23','Editar_Comics')->name("23");;
Route::view('24','Editar_Articulo')->name("24");
//Route::view('12','Alta_Proveedor')->name("12");
Route::view('13','Editar_Proveedor')->name("13");
Route::view('32','Editar_Pedidos');
Route::view('6','catalogo2');


// Route::get('/', function () {
//     return view('Plantilla_1');
// });

//Route::post('AltaArticulo',[ControladorComics::class,'validacion1']);
//ALTA ARTICULO
Route:: post('articulo', [ControladorArticulos::class, 'store'])->name('articulo.store');
Route::get('articulo/create',[ControladorArticulos::class,'create'])->name('articulo.create');

//AlTA COMICS
Route:: post('comic', [ControladorComic::class, 'store'])->name('comic.store');
Route::get('comic/create',[ControladorComic::class,'create'])->name('comic.create');

//ALTA PROVEEDOR
Route:: post('proveedor', [ControladorProveedor::class, 'store'])->name('proveedor.store');
Route::get('proveedor/create',[ControladorProveedor::class,'create'])->name('proveedor.create');

//ALTA PEDIDO
Route::post('guardarPedido',[ControladorPedidos::class,'store'])->name('guardarPedido');
Route::get('pedidos_catalogo',[ControladorPedidos::class,'index'])->name('pedidos_catalogo');


Route::post('dead/{id}',[ControladorPedidos::class,'destroy'])->name('dead');
Route::post('PDF/{id}',[ControladorPedidos::class,'PDF'])->name('PDF');

Route::post('AltaArticulo2',[ControladorComics::class,'validacion2']);
Route::post('Comics1',[ControladorComics::class,'validacion3']);
Route::post('Comics2',[ControladorComics::class,'validacion4']);
Route::post('Proveedor1',[ControladorComics::class,'validacion5']);
Route::post('Proveedor2',[ControladorComics::class,'validacion6']);
Route::post('PostLogin',[controllerLogin::class, 'PostLogin'])->name('Loging');
Route::post('PostSignUp',[controllerLogin::class, 'PostSignUp'])->name('signing');

Route::get('/',function(){
    return view('Login');
})->name('log');

Route::get('RegistrarTrabajador',function(){
    return view('RegistrarTrabajador');
})->name('Signin');

Route::get('VentasArticulos',function(){
    return view('VentasArticulos');
})->name('VentArticulos');

Route::get('VentasComics',function(){
    return view('VentasComics');
})->name('VentComics');
