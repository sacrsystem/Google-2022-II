<?php
$idProducto = urlencode($_REQUEST['idProducto']);

$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/eliminarProducto.php?idProducto=".$idProducto;
$resultado = file_get_contents($url);

if($resultado == "1"){
    header("Location: CatalogoA.php");
    die();
}
?>