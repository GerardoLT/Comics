<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Comics_A;
use DB;
use Carbon\Carbon;

class ControladorComic extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        return view('Alta_Comics');
    }

    public function store(Comics_A $request)
    {
        DB::table('tb_comic')->insert([
            "nombre"=>$request->input('Nombre'),
            "edicion"=>$request->input('Edicion'),
            "precioCompra"=>$request->input('Precio_compra'),
            "compania"=>$request->input('Compañia'),
            "precioVenta"=>$request->input('Precio_venta'),
            "cantidad"=>$request->input('Cantidad'),
            "fechaIngreso"=>$request->input('Fecha'),
            "idproveedor"=>$request->input('Proveedor'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('comic/create')->with('mensaje'," ");

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
