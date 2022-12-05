<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Articulo_A;
use DB;
use Carbon\Carbon;

class ControladorDB extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        return view('Alta_Articulo');
    }

    public function store(Articulo_A $request)
    {
        DB::table('tb_articulo')->insert([
            "tipo"=>$request->input('Tipo'),
            "Marca"=>$request->input('Marca'),
            "FechaIngreso"=>$request->input('fecha'),
            "PrecioCompra"=>$request->input('Precio_compra'),
            "cantidad"=>$request->input('Cantidad'),
            "PrecioVenta"=>$request->input('Precio_venta'),
            "descripcion"=>$request->input('Descripcion'),
            "idproveedor"=>$request->input('Proveedor'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('articulo/create')->with('confirmacion'," ");

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
