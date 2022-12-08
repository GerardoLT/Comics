<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Comics_A;
use DB;
use Carbon\Carbon;

class ControladorComic2 extends Controller
{
   
    public function index()
    {
        $tablaCo2 = DB::table('tb_comic')->get();
        return view('VentasComics', compact('tablaCo2'));
    }

    public function create()
    {
        return view('Alta_Comics');
    }

    public function store(Request $request)
    {  
        $date=date("m");
      $id=$request->input('id');
       $venta=DB::table('tb_venta')->where('id', $id)->get();
       if($venta->first()==null){
        $cant2=$request->input('cantidad1');
        $cant=$request->input('cantidad2');
        if($cant==0){
            
            return redirect('compraexito')->with('n1'," ");
        }if($cant>$cant2){
       
            return redirect('compraexito')->with('n2'," ");

        }if($cant<0){
       
            return redirect('compraexito')->with('n3'," ");

        }else{
           $id=$request->input('id');
            $cant3=$cant2-$cant;
            DB::table('tb_venta')->insert([
                "id"=>$request->input('id'),
                "descripcion"=>$request->input('descripcion'),
                "cantidad"=>$request->input('cantidad2'),
                "precio"=>$request->input('precio'),
                "tipo"=>"comics",
                "estado"=>"disponible",
                "fecha"=>Carbon::now(),
                "mes"=>$date,
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now(),
            ]);
            DB::table('tb_comic')->where('idcomic', $id)->update([
          
                "cantidad"=>$cant3,
                "updated_at"=>Carbon::now(),
            ]);

            return redirect('compraexito')->with('carrito'," ");
        }
       }else{  
        $cant2=$request->input('cantidad1');
        $cant=$request->input('cantidad2');
        if($cant==0){
            
            return redirect('compraexito')->with('n1'," ");
        }if($cant>$cant2){
       
            return redirect('compraexito')->with('n2'," ");

        }if($cant<0){
       
            return redirect('compraexito')->with('n3'," ");

        }else{
            $cantidad_antigua = DB::table('tb_venta')->where('id', $id)->value('cantidad');
            $cantidad_nueva= $cantidad_antigua+$cant;
            DB::table('tb_venta')->where('id', $id)->update([
                "cantidad"=>$cantidad_nueva,
                "updated_at"=>Carbon::now(),
            ]);
            return redirect('compraexito')->with('carrito'," ");
        }
       
        }

       
            
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Comics_A $request, $id)
    {
        $suma= $request->input('Precio_compra')+$request->input('Precio_compra') * 0.4;
        DB::table('tb_comic')->where('idComic', $id)->update([
            "nombre"=>$request->input('Nombre'),
            "edicion"=>$request->input('Edicion'),
            "precioCompra"=>$request->input('Precio_compra'),
            "compania"=>$request->input('Compañia'),
            "precioVenta"=>$suma,
            "cantidad"=>$request->input('Cantidad'),
            "fechaIngreso"=>$request->input('Fecha'),
            "idproveedor"=>$request->input('Proveedor'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('comic')->with('Actualiza'," ");
    }

    public function destroy($id)
    {
        DB::table('tb_comic')->where('idComic', $id)->delete();
        return redirect('comic')->with('Elimina'," ");
    }
}
