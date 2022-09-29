<?php
$producto = urlencode("'".$_POST['producto']."'");
$descripcion =urlencode("'".$_POST['descripcion']."'");
$precio = urlencode($_POST['precio']);
$stock = urlencode($_POST['stock']);
$imagen =  "'".str_replace(" ","",$_POST['producto']).".".basename( $_FILES['imagen']['type'])."'";
//str_replace(" ", "", $producto)
$target_path = "imagen/";
$target_path = $target_path.str_replace(" ","",$_POST['producto']).".".basename( $_FILES['imagen']['type']).".".basename( $_FILES['imagen']['type']);
$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/agregarProducto.php?producto=".$producto."&descripcion=".$descripcion."&precio=".$precio."&stock=".$stock."&imagen=".$imagen;
$resultado = file_get_contents($url,false);

if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
    // echo "El archivo ".  basename( $_FILES['imagen']['name']). 
    // " ha sido subido";
 } else{
   //  echo "Ha ocurrido un error, trate de nuevo!";
 }

if($resultado == "1"){
    header("Location: CatalogoA.php");
    die();
}else{
    header("Location: CrearProducto.php");
    die();
}



?>