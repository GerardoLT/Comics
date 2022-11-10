@extends('Plantilla_1')

@section('contenido')
<br>
<br>
<br>
<br>

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">ALTA</h1>
    <div class="card text-center mb-5 p-3 mb-2 bg-secondary text-white">
        <div class="card-header">
            Articulos
        </div>
        <div class="card-body">
            <form method="post" action="#">
                @csrf 
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Tipo:</label></p>
                <input type="text" name="txtTipo" class="form-control">
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Marca:</label></p>
                    <input type="text" class="form-control" name="txtMarca">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Fecha ingreso:</label></p>
                    <input type="date" class="form-control" name="txtFeIng">
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Precio compra:</label></p>
                    <input type="text" class="form-control" name="txtPCompa">
                </div>   
            </div>    
            <div class="form-row">
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Cantidad:</label></p>
                    <input type="text" class="form-control" name="txtCantidad">
            </div>
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Precio venta:</label></p>
                <input type="text" class="form-control" name="txtPVenta">
            </div>   
            </div> 
            <p class="text-start"><label class="fs-4 fw-bolder" >Descripcion:</label></p>
                <input type="text" class="form-control" name="txtDescripcion">
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