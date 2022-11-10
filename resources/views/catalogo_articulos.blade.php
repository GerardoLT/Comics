
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
<div class="container col-md-8" style="background-color: gray">
  <h1>Catalogo Articulos</h1>
    <table style="align-content: center">
        
        <tr>
            <th>
                <p style="color: grey">----------</p>      
            </th>
            <th>
                <table class="table">
                   
                      <tr>
                        
                        <th scope="col">producto</th>
                        <th scope="col">precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col" >Editar</th>
                        <th scope="col" >Eliminar</th>
                    
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="col">figura de antman</th>
                        <th scope="col">5000</th>
                        <th scope="col">13</th>
                        <th scope="col" style="background-color: blue">Editar</th>
                        <th scope="col" style="background-color: red">Eliminar</th>
                    
                      </tr>
                      <tr>
                        <th scope="col">casco de ironman</th>
                        <th scope="col">2500</th>
                        <th scope="col">23</th>
                        <th scope="col" style="background-color: blue">Editar</th>
                        <th scope="col" style="background-color: red">Eliminar</th>
                    
                     
                
                    
                      </tr>
                      <tr>
                     
                        <th scope="col">linterna de gren lantern</th>
                        <th scope="col">1000</th>
                        <th scope="col">123</th>
                        <th scope="col" style="background-color: blue">Editar</th>
                        <th scope="col" style="background-color: red">Eliminar</th>
                    
                    
                      </tr>
                    </tbody>
                  </table>
        
       
            </th>
            <th>
                <p style="color: grey">----------</p>      
            </th>
            <th>
                <table class="table table-success table-striped"  >
                  <tr>
                         
                            
                    <th scope="row"><a href="5"><button type="button" class="btn btn-primary">Comics</button></a></th>
                  
                  <tr>
                 
                        <tr>
                         
                            
                            <th scope="row"><button type="button" class="btn btn-primary">Agregar articulo</button></th>
                          
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