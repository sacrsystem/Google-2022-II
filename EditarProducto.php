<?php
include('indexA.php'); 
$idProducto = $_REQUEST['idProducto'];
$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/listaProductos.php?idProducto=".$idProducto;
$data = json_decode(file_get_contents($url),true);
?>

    <div
      class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow"
      style="width: 35rem"
    >
      <div class="text-center fs-1 fw-bold">Editar Producto</div>
      <div class="input-group mt-1">
       <div> 
<?php 
foreach( $data as $d ){
?>
  <form action="f_editar_producto.php" method="POST"  enctype="multipart/form-data">
            <input type="hidden" name="idProducto" id="idProducto" class="form-control" value = "<?php echo $idProducto;?>">

            <div>
                <label for="producto">Nombre Producto</label>
                <input type="text" name="producto" id="producto" class="form-control" value = "<?php echo $d['Producto'];?>">
            </div>
            <div>
            <label for="descripcion">descripcion</label>
                <textarea name="descripcion"  class="form-control"><?php echo $d['Descripcion'];?></textarea>
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" value = "<?php echo $d['Precio'];?>">
            </div>
            <div>
                <label for="stock">Cantidad</label>
                <input type="text" name="stock" id="stock" class="form-control" value = "<?php echo $d['Stock'];?>">
            </div>
            <div>
            <img src="imagen/<?php echo $d['Imagen']; ?>" class="card-img-top" alt="...">
            </div>
            <div>
                <label for="imagen">imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control" >
            </div>

            <div>
                <input type ="submit" class="btn btn-warning" value = "Actualizar"/>
            </div>
</form>



<?php
}
?>

    </div>
 