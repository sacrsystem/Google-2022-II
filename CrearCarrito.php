<?php 
include('index1.php');

$idUsuario = $_SESSION["idUsuario"];
$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/verCarrito.php?idUsuario=".$idUsuario;
$data = json_decode(file_get_contents($url),true);
?>

    <div
      class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow" style="width: 90rem">
     

      <div class="text-center fs-1 fw-bold">MI CARRITO</div>
      <div class="input-group mt-1">
       <div> 

       <table class="table table-success table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>COSTO</th>
            <th>CANTIDAD</th>
            <th>TOTAL</th>
</tr>


           
        <?php

        $total = 0;
        foreach($data as $items) {
            $idProducto = $items['idProducto'];   
            $total += $items['Precio'];
        ?>  
        <tr>       
            <td><?php echo $items['idProducto'];?></td>
            <td><?php echo $items['Producto'];?></td>
            <td><?php echo $items['Descripcion'];?></td>
            <td><?php echo $items['Precio'];?></td>
            <td><?php echo $items['Cantidad'];?></td>
            <td><?php echo $items['Precio'];?></td>  
            <td><a href = "f_eliminar_producto_carrito.php?idUsuario=<?php echo $idUsuario;?>&idProducto=<?php echo $items['idProducto'];?>"><button class ="btn btn-success">Eliminar</button>  </a></td>  
        </tr>
        <?php
        }
        ?>

        <tr>
        <td colspan = "5">TOTAL</td>
        <td>S/.<?php echo $total;?></td> 
        <td></td>
       </tr>
        </table>


    </div>


