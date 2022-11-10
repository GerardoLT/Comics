@extends('Plantilla_1')

@section('Contenido')
<br>
<br>
<br>
<br>

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">EDITAR</h1>
    <div class="card text-center mb-5 p-3 mb-2 bg-secondary text-white">
        <div class="card-header">
            Articulo
        </div>
        <div class="card-body">
            <form method="post" action="AltaArticulo2">
                @csrf 
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Tipo:</label></p>
                <input type="text" name="Tipo" class="form-control" value="{{old("Tipo")}}">
                <p class="text-danger">{{ $errors->first('Tipo') }}</p>
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Marca:</label></p>
                <input type="text" name="Marca" class="form-control" value="{{old("Marca")}}">
                <p class="text-danger">{{ $errors->first('Marca') }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Fecha ingreso:</label></p>
                <input type="text" name="fecha" class="form-control" value="{{old("fecha")}}">
                <p class="text-danger">{{ $errors->first('fecha') }}</p>
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Precio compra:</label></p>
                <input type="text" name="Precio_compra" class="form-control" value="{{old("Precio_compra")}}">
                <p class="text-danger">{{ $errors->first('Precio_compra') }}</p>
                </div>   
            </div>    
            <div class="form-row">
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Cantidad:</label></p>
            <input type="text" name="Cantidad" class="form-control" value="{{old("Cantidad")}}">
            <p class="text-danger">{{ $errors->first('Cantidad') }}</p>
            </div>
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Precio venta:</label></p>
            <input type="text" name="Precio_venta" class="form-control" value="{{old("Precio_venta")}}">
            <p class="text-danger">{{ $errors->first('Precio_venta') }}</p>
            </div>   
            </div> 
            <p class="text-start"><label class="fs-4 fw-bolder" >Descripcion:</label></p>
            <input type="text" name="Descripcion" class="form-control" value="{{old("Descripcion")}}">
            <p class="text-danger">{{ $errors->first('Descripcion') }}</p>
            <br><div class="btn-group" role="group">
                <p><label class="fs-4 fw-bolder">Proveedor:</label></p>
                <input type="text" name="Proveedor" class="form-control" value="{{old("Proveedor")}}">
            <p class="text-danger">{{ $errors->first('Proveedor') }}</p>
            </div>
    
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info fw-bold fst-italic">Guardar</button>
        </form>
        </div>
        
</div>
@if (session()->has('mensaje'))
<br>
<div class="alert alert-success" role="alert" style="align-content: center">
  <p style="text-align: center">
Editado con exito
  </p>
</div>

<br>
@endif
@stop