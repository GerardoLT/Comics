@extends('Plantilla_1')

@section('contenido')
<br>
<br>
<br>
<br>

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">EDITAR</h1>
    <div class="card text-center mb-5 p-3 mb-2 bg-secondary text-white">
        <div class="card-header">
            Comics
        </div>
        <div class="card-body">
            <form method="post" action="#">
                @csrf 
                <p class="text-start"><label class="fs-4 fw-bolder">Nombre:</label></p>
                <input type="text" name="txtNombre" class="form-control">
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Edicion:</label></p>
                    <input type="text" class="form-control" name="txtEdicion">
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Precio Compra:</label></p>
                    <input type="text" class="form-control" name="txtCompra">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <p class="text-start"><label class="fs-4 fw-bolder">Compañia:</label></p>
                    <input type="text" class="form-control" name="txtCompa">
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Precio Venta:</label></p>
                    <input type="text" class="form-control" name="txtVenta">
                </div>   
            </div>    
            <div class="form-row">
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Cantidad:</label></p>
                <input type="text" class="form-control" name="txtCant">
            </div>
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Fecha ingreso:</label></p>
                <input type="date" class="form-control" name="txtFecha">
            </div>   
            </div> 
            <br><div class="btn-group" role="group">
                <p><label class="fs-4 fw-bolder">Proveedor:</label></p>
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                </div>
            </div></br>
    
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info fw-bold fst-italic">Guardar</button>
        </form>
        </div>
        
</div>

@stop