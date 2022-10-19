<?php
session_start();
if(isset($_SESSION["usuario"]))
{


$usuario = "";
if(isset($_REQUEST['usuario'])){
  $usuario = $_REQUEST['usuario'];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOOGLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
    <nav class="navbar navbar-expand-lg navbar-light  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="/homeA">GOOGLE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="/CrearProducto">INGRESAR PRODUCTO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="/CatalogoA">CATALOGO</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link text-white"><?php echo $usuario; ?></a>
        </li>
        

      </ul>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/cerrar?cerrar=yes">CERRAR SESION</a>
      </div>
    </div>
  </div>
</nav>
</body>
</html>

<?php
}else{
  header("Location: /LoginUsuario");
  die();
}
?>