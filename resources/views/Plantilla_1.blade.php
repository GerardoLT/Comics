<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      header {
        background: rgb(96,41,40);
        width: 100%;
        position: fixed;
        z-index: 100;
      }
      
      nav {
        float: left;
      }
      table{
        padding-left: 10%;
      }
      table tr td {
        list-style: none;
        overflow: hidden; 
      }
      
      table tr td {
        float: left;
        font-family: Arial, sans-serif;
        font-size: 30px;
        align-content: center;
      }
      table tr td a{
        display: block;
        padding: 20px;
        color: rgb(209, 189, 6);
        text-decoration: none;
      }
     
      table tr td a:hover{
        display: block;
        padding: 20px;
        color: rgb(246, 255, 0);
        text-decoration: none;
      }
 
      form input{
        text-align: unset;
      }
      p{
        color: rgb(96,41,40);
      }
      
      </style>
      <header>
        <TABLE ALIGN="left">
      
          <tr>
            <td> 
              <img src="img/comics.jpg" height="80" width="250">
            </td>
           
            <td> <p >----------------------</p></td>
            <td> <input type="text"></td>
            <td> <button>Buscar</button></td>
            <td> <p >------------------</p></td>
            <td> <a href="#">Carrito</a> </td>
          </tr>
          <tr>
            <td> <p >----------------------</p></td>
           
            <td> <a href="#">Comics</a></td>
            <td> <a href="#">Articulos</a></td>
            <td> <a href="#">Catalogo</a></td>
            <td> <a href="#">Provedores</a></td>
            <td> <a href="#">Pedidos</a></td>
           
            <td> <p >------------------</p></td>

          </tr>
        </TABLE>
</header>

  <body>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>