<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  $_SESSION['idUsuario'] = NULL;
  unset($_SESSION['idUsuario']);
  
  //Redireccionamos a la pagina index.php
  header('Location: index.php');
}

?>