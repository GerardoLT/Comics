@extends('Plantilla_1')

@section('Contenido')

<div class="text-center">
        <br>
        <a class="btn btn-primary active ml-4" href="{{route('articulo.index')}}"><i class="fas fa-magic mr-1"></i> Articulos</a>
        <a class="btn btn-default" href="{{route('comic.index')}}">Comics <i class="fas fa-magic ml-1"></i></a>
    </div>


<br>
<!-- tablas -->
<div class="container col-md-8 table table-hover">
  <h1>Catalogo Articulos</h1>
  <table style="align-content: center">

    <tr>

      <th>
        <table class="table">

          <tr>

            <th scope="col">Marca</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

          </tr>
          </thead>
          <tbody>
          @foreach($tablaAr as $art)
            <tr>
              <th scope="col">{{$art->Marca}}</th>
              <th scope="col">{{$art->PrecioVenta}}</th>
              <th scope="col">{{$art->cantidad}}</th>
              <th scope="col">{{$art->descripcion}}</th>
              <th scope="col" style="background-color: blue"><a href="24">Editar</a></th>
              <th scope="col" style="background-color: red">Eliminar</th>

            </tr>
          </tbody>
          @endforeach
        </table>


      </th>
      <th>
        <table class="table table-success table-striped">


          <tr>
            <th scope="row"><a href="{{route('articulo.create')}}"><button type="button" class="btn btn-primary">Agregar articulo</button></a></th>
          <tr>

        </table>
      </th>

    </tr>


  </table>

</div>

@stop