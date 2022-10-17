<?php
$idProducto = urlencode($_REQUEST['idProducto']);
session_start();
$idUsuario =$_SESSION["idUsuario"];

$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/agregarProductoCarrito.php?idUsuario=".$idUsuario."&idProducto=".$idProducto;
$resultado = file_get_contents($url);
header("Location: /CrearCarrito");

/*if($resultado == "1"){
    header("Location: /CatalogoC");
    die();
}else{
    header("Location: /CatalogoC");
    die();
}*/
?>