<?php 

include('index.php'); 
$mensaje = "";

if(isset($_REQUEST['mensaje'])){
  $mensaje = $_REQUEST['mensaje'];
}

?>

<form action = "f_loguear_usuario.php" method ="post">
    <div class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow" style="width: 25rem">
      <div class="text-center fs-1 fw-bold">Login</div>
      <div class="input-group mt-4">
        <div class="input-group-text btn btn-dark">
        <label for="nombreSeccion">correo</label><br>
        </div>
        <input class="form-control bg-light" type="text" placeholder="Correo" name="correo" id = "correo"/>
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text btn btn-dark">
        <label for="nombreSeccion">Contraseña</label><br>
        </div>
        <input class="form-control bg-light" type="password" placeholder="Contraseña" name = "pasword" />
      </div>
      <input type="submit" class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm"/>
      <!-- <a  class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm" href="index1.php" >LOGIN</a>
      <a class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm" href="indexA.php">LOGINA</a>
   -->
      <div class="d-flex gap-1 justify-content-center mt-1">
        <a  href="CrearUsuario.php" class="text-decoration-none text-dark fw-semibold">LOGIN</a>
      <div class="alert alert-primary" role="alert">
 <?php echo $mensaje;?>
</div>

      </div>
    </div>
</form>

