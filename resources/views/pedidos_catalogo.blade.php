@extends('Plantilla_1')

@section('Contenido')



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- tablas -->
<div class="container col-md-12 table table-hover">
  <h1>Pedidos</h1>
  <table style="align-content: center">

    <tr>
      <th>
        <table class="table">

          <tr>
            <th scope="col">No Pedido</th>
            <th scope="col">descripcion</th>
            <th scope="col">cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">fecha</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
            <th scope="col">PDF</th>
          </tr>
            @foreach ($datos as $dato)
            <tr>
              <th>{{$dato->idpedido}}</th>
              <th>{{$dato->descripcion}}</th>
              <th>{{$dato->cantidad}}</th>
              <th>{{$dato->precio}}</th>
              <th>{{$dato->fecha}}</th>
            <th scope="col"><button type="button" class="btn btn-primary">Editar</button></th>
            <th scope="row">
              <form action="{{route('dead',$dato->idpedido)}} " method="POST">
                @csrf
              <button type="submit" class="btn btn-primary">Eliminar</button>
              </form>
            </a></th>
              <th scope="row">
                <form action="{{route('PDF',$dato->idpedido)}} " method="POST">
                  @csrf
                <button type="submit" class="btn btn-primary">Generar PDF</button>
                </form>
              </a></th>
            </tr>
            @endforeach
          
            </td>
            </tr>
         
          
        </table>


      </th>

      <th>
        <table class="table table-success table-striped">


          <tr>


            <th scope="row"><button type="button" class="btn btn-primary"><a href="33">Crear Pedido</a></button></th>

          <tr>
          <tr>


           

          <tr>

          </tr>
          <tr>

          </tr>
        </table>
      </th>

    </tr>


  </table>

</div>

@stop