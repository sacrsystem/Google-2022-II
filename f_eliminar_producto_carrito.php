<?php
$idUsuario = $_REQUEST['idUsuario'];
$idProducto = $_REQUEST['idProducto'];

$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/eliminarProductoCarrito.php?idUsuario=".$idUsuario."&idProducto=".$idProducto;
$resultado = file_get_contents($url);

if($resultado == "1"){
    header("Location: CrearCarrito.php");
    die();
}
?>