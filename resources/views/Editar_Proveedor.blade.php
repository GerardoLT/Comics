@extends('Plantilla_1')

@section('contenido')
<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">EDITAR</h1>
    <div class="card text-center mb-5 p-3 mb-2 bg-secondary text-white">
        <div class="card-header">
            Proveedores
        </div>
        <div class="card-body">
            <form method="post" action="#">
                @csrf 
                <p class="text-start"><label class="fs-4 fw-bolder">Contacto:</label></p>
                <input type="text" name="txtContacto" class="form-control">
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Empresa:</label></p>
                    <input type="text" class="form-control" name="txtEmpresa">
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">No Fijo:</label></p>
                    <input type="text" class="form-control" name="txtFijo">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <p class="text-start"><label class="fs-4 fw-bolder">Direccion:</label></p>
                    <input type="text" class="form-control" name="txtDirec">
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">No Celular:</label></p>
                    <input type="text" class="form-control" name="txtCelular">
                </div>   
            </div>    
            <div class="form-row">
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Pais:</label></p>
                <input type="text" class="form-control" name="txtPais">
            </div>
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Correo:</label></p>
                <input type="text" class="form-control" name="txtCorreo">
            </div>   
            </div> 
    
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info fw-bold fst-italic">Guardar Edicion</button>
        </form>
        </div>
        
</div>

@stop