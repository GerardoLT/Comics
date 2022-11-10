<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>WeirdoComics </title>

  <link href="css/cat_cards.css" rel="stylesheet" type="text/css">
  <link href="css/login.css" rel="stylesheet" type="text/css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- cdn para botones -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />

  <style>
    header {
      background: linear-gradient(to right, rgba(96,41,40.1), rgba(163, 73, 31,1));
      width: 100%;
      z-index: 100;
    }

    nav {
      float: left;
    }

    a {
      text-decoration: none;
      color: rgb(255, 255, 255);

    }

    a:hover {
      text-decoration: none;
      color: rgb(255, 255, 255);
    }

    .Plantilla {
      background: linear-gradient(to right, rgba(96,41,40.1), rgba(163, 73, 31,1));
      padding-left: 10%;
      width: 100%;

      z-index: 100
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

    table tr td a {
      display: block;
      padding: 20px;
      color: rgb(209, 189, 6);
      text-decoration: none;
    }

    table tr td a:hover {
      display: block;
      padding: 20px;
      color: rgb(246, 255, 0);
      text-decoration: none;
    }

    form input {
      text-align: unset;
    }

    header p {
      color: rgb(96, 41, 40);
    }
  </style>
  <header>
    <TABLE ALIGN="left" class="Plantilla">

      <tr>
        <td> <a href="/"> <img src="img\comics.jpg" height="80" width="250"></a>
        </td>    
        <td>
        </td>
        <td> <input type="text"></td>
        <td> <button>Buscar</button></td>
        <td>
        </td>
        <td> <a href="4">Carrito</a> </td>
      </tr>
      <tr class="col-lg-6">

        <td> <a href="2">Catalogo</a></td>
        <td> <a href="VentasArticulos">Ventas</a></td>
        <td> <a href="1">Provedores</a></td>
        <td> <a href="3">Pedidos</a></td>
        <td> <a href="RegistrarTrabajador">Alta Trabajador</a></td>

      </tr>
    </TABLE>
  </header>

<body>
  @yield('Contenido')
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>