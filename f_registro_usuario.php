<?php
$correo = "'".$_POST['correo']."'";
$contrasena = "'".$_POST['contrasena']."'";
$usuario = "'".$_POST['usuario']."'";

$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/registrarUsuario.php?correo=".$correo."&password=".$contrasena."&usuario=".$usuario;
$resultado = file_get_contents($url);


    if($usuario == "'cliente'")
    {
        header("Location: /index1");
        die();
    }
    if($usuario == "administrador")
    {
        header("Location: /indexA");
        die();
    }

session_start();
$_SESSION["usuario"] = $correo;
//$_SESSION["idUsuario"] = $correo;
    






?>