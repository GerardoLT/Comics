@extends('Plantilla_1')

@section('Contenido')

<div class="text-center">
        <br>
        <a class="btn btn-default" href="{{route('articulo.index')}}"><i class="fas fa-magic mr-1"></i> Articulos</a>
        <a class="btn btn-primary active ml-4" href="{{route('comic.index')}}">Comics <i class="fas fa-magic ml-1"></i></a>
    </div>


<br>
<!-- tablas -->
<div class="container col-md-8 table table-hover">
  <h1>Catalogo Comics</h1>
  <table style="align-content: center">

    <tr>

      <th>
        <table class="table">

          <tr>

            <th scope="col">Nombre</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Edicion</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

          </tr>
          </thead>
          <tbody>
          @foreach($tablaCo as $com)
            <tr>
              <th scope="col">{{$com->nombre}}</th>
              <th scope="col">{{$com->precioVenta}}</th>
              <th scope="col">{{$com->cantidad}}</th>
              <th scope="col">{{$com->edicion}}</th>
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
            <th scope="row"><a href="{{route('comic.create')}}"><button type="button" class="btn btn-primary">Agregar comics</button></a></th>
          </tr>

        </table>
      </th>

    </tr>


  </table>

</div>

@stop