
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
<div class="container col-md-10" style="background-color: gray">
  <h1>Pedidos</h1>
    <table style="align-content: center">
        
        <tr>
            <th>
                <p style="color: grey">----------</p>      
            </th>
            <th>
                <table class="table">
                   
                      <tr>
                        <th scope="col">No Pedido</th>
                        <th scope="col">Productos</th>
                        <th scope="col">cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">fecha</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="col">1</th>
                        <th scope="col">spiderman n12 
                          <br>
                              
                          batman retorno
                          <br>
                                        linterna blanca </th>
                        <th scope="col">
                          12
                          <br>
                          23
                          <br>
                          30
                        </th>
                        <th scope="col">
100
<br>
232
<br>
222


                        </th>
                        <th scope="col">comics indi
                          <br>
                          comics indi
                          <br>
                          comics indi
                        </th>
                        <th scope="col">12-2-22
                          
<br>
                          12-3-22
    
<br>
                          23-4-22
                        </th>
                      
                        <th scope="col" style="background-color: blue">Editar</th>
                        <th scope="col" style="background-color: red">Eliminar</th>
                      </tr>
                      <tr>
               
                     
                
                    
                      </tr>
                      <tr>
                     
                    
                    
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
                         
                            
                          <th scope="row"><button type="button" class="btn btn-primary">Agregar Pedido</button></th>
                          
                          <tr>
                            <tr>
                         
                            
                              <th scope="row"><button type="button" class="btn btn-primary">Generar PDF</button></th>
                              
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