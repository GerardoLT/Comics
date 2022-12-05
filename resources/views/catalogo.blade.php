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
<div class="container col-md-8 table table-hover">
  <h1>Catalogo</h1>
  <table style="align-content: center">

    <tr>

      <th>
        <table class="table">

          <tr>

            <th scope="col">producto</th>
            <th scope="col">precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Tipo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

          </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="col">figura de antman</th>
              <th scope="col">5000</th>
              <th scope="col">13</th>
              <th scope="col">Articulo</th>
              <th scope="col" style="background-color: blue"><a href="24">Editar</a></th>
              <th scope="col" style="background-color: red">Eliminar</th>

            </tr>
            <tr>
              <th scope="col">casco de ironman</th>
              <th scope="col">2500</th>
              <th scope="col">23</th>
              <th scope="col">Articulo</th>
              <th scope="col" style="background-color: blue"><a href="24">Editar</a></th>
              <th scope="col" style="background-color: red">Eliminar</th>




            </tr>
            <tr>

              <th scope="col">linterna de gren lantern</th>
              <th scope="col">1000</th>
              <th scope="col">123</th>
              <th scope="col">Articulo</th>
              <th scope="col" style="background-color: blue"><a href="24">Editar</a></th>
              <th scope="col" style="background-color: red">Eliminar</th>


            </tr>
            <tr>
              <th scope="col">spiderman N12</th>
              <th scope="col">5000</th>
              <th scope="col">13</th>
              <th scope="col">comic</th>
              <th scope="col" style="background-color: blue"><a href="23">Editar</a></th>
              <th scope="col" style="background-color: red">Eliminar</th>

            </tr>
            <tr>
              <th scope="col">acuaman cisis</th>
              <th scope="col">2500</th>
              <th scope="col">23</th>
              <th scope="col">comic</th>
              <th scope="col" style="background-color: blue"><a href="23">Editar</a></th>
              <th scope="col" style="background-color: red">Eliminar</th>




            </tr>
            <tr>

              <th scope="col">batmanman el retorno</th>
              <th scope="col">1000</th>
              <th scope="col">123</th>
              <th scope="col">comic</th>
              <th scope="col" style="background-color: blue"><a href="23">Editar</a></th>
              <th scope="col" style="background-color: red">Eliminar</th>


            </tr>
          </tbody>
        </table>


      </th>
      <th>
        <table class="table table-success table-striped">


          <tr>


            <th scope="row"><a href="{{route('articulo.create')}}"><button type="button" class="btn btn-primary">Agregar articulo</button></a></th>

          <tr>
            <th scope="row"><a href="{{route('comic.create')}}"><button type="button" class="btn btn-primary">Agregar comics</button></a></th>
          </tr>
          <tr>

          </tr>
        </table>
      </th>

    </tr>


  </table>

</div>

@stop