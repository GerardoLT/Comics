
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
<div class="container col-md-8 table table-hover" >
  <h2>ventas</h2>
  <table class="table table-success table-striped">


  

    <tr>
     
    </th>
    <th scope="row">
     <form method="post" action="{{route('PDF3')}}">
      @csrf 
       <a ><button type="submit" class="btn btn-primary">Generar reporte del dia</button></a>
     </form>

   </th>
      
      <th scope="row">
        <form method="post" action="{{route('PDF4')}}">
          @csrf 
         
        <a ><button type="submit" class="btn btn-primary">Generar reporte del mes</button></a>
        </form>
    
    <tr>
        </a>

  </table>
  <table style="align-content: center">

    <tr>

      <th>
        <table class="table">

          <tr>

            <th scope="col">descripcion</th>
            <th scope="col">cantidad</th>
            <th scope="col"> precio </th>
            <th scope="col"> tipo </th>
            <th scope="col"> fecha </th>
        

          </tr>
          </thead>
          <tbody>
          @foreach($tabla as $art)
            <tr>
              <th scope="col">{{$art->descripcion}}</th>
              <th scope="col">{{$art->cantidad}}</th>
              <th scope="col"> {{$art->precio}}<th>
                <th scope="col"> {{$art->tipo}}<th>
                  <th scope="col"> {{$art->fecha}}<th>
               
          
               
                
                <th>
                 
                </th>
                </tr>
          </tbody>
        
          @endforeach
        </table>

 

</div>

@stop