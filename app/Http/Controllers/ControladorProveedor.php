<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Proveedor_A;
use DB;
use Carbon\Carbon;

class ControladorProveedor extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        return view('Alta_Proveedor');
    }

    public function store(Proveedor_A $request)
    {
        DB::table('tb_proveedor')->insert([
            "contacto"=>$request->input('Contacto'),
            "empresa"=>$request->input('Empresa'),
            "direccion"=>$request->input('Direccion'),
            "telefono"=>$request->input('Celular'),
            "pais"=>$request->input('Pais'),
            "correo"=>$request->input('Correo'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('proveedor/create')->with('mensaje'," ");

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
