<?php
$idProducto = urlencode($_POST['idProducto']);
$producto = urlencode("'".$_POST['producto']."'");
$descripcion =urlencode("'".$_POST['descripcion']."'");
$precio = urlencode("'".$_POST['precio']."'");
$stock = urlencode("'".$_POST['stock']."'");
$imagen =  urlencode("'".str_replace(" ","",$_POST['producto']).".".basename( $_FILES['imagen']['type'])."'");
//str_replace(" ", "", $producto)
$target_path = "imagen/";
$target_path = $target_path.$_POST['producto'].".".basename( $_FILES['imagen']['type']);
//restaurantesofi.000webhostapp.com/serviciosMuebles/agregarProducto.php?producto=%27Ropero%20de%20Melamine%27&descripcion=%27Marca%20PAZART%20MUEBLES%20-%20MADESA%27&precio=%27950%27&stock=%275%27&imagen=%27ropero.jpg%27
$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/editarProducto.php?idProducto=".$idProducto."&producto=".$producto."&descripcion=".$descripcion."&precio=".$precio."&stock=".$stock."&imagen=".$imagen;

$resultado = file_get_contents($url);


if($resultado == "1"){
    header("Location: CatalogoA.php");
    die();
}

if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
   // echo "El archivo ".  basename( $_FILES['imagen']['name']). 
   // " ha sido subido";
} else{
  //  echo "Ha ocurrido un error, trate de nuevo!";
}

?>