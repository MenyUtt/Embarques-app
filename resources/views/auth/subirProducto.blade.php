@extends('auth.layouts')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>verProductos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Inventario</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Inventario
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subir Producto</a></li>
                  <li><a class="dropdown-item" href="#">Eliminar Producto</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <div class="container" id="contenedor">
            <h2 align=center>Subir Producto</h2> 
             <hr>
              <form action="../scripts/guardaragenda.php" method="post">
    
              <div class="row">
                <div class="col-6">
              <label class=' control-label'>
                  Nombre</label>
              <input type="label" class="col-6 form-control" name="Nombre" id="">
              </div>
              <div class="col-6">
              <label class=' control-label'>
                  Precio</label>
              <input type="label" class="col-6 form-control" name="Precio" id="">
              </div>
              <div class="col-6">
                <label class=' control-label'>
                    Stock</label>
                <input type="" class="col-6 form-control" name="Stock" id="">
                </div>
              </div> <br>
    
              <div class='mb-3'>
                  <label class='control-label' for='descripcion'>Descripción</label>
                  <textarea name='descripcion' cols='5' rows='4' class='form-control'></textarea>
              </div>
    
              <div class="d-grid gap-2">
              <button class="btn btn-warning btn-lg" type="submit">Guardar</button> <br>
              <button class="btn btn-warning btn-lg" type="submit">Cerrar</button>
              </div>
              </form>
     </div>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>
