<?php 
include('index1.php');

$idUsuario = $_SESSION["idUsuario"];
$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/verCarrito.php?idUsuario=".$idUsuario;
$data = json_decode(file_get_contents($url),true);
?>

    <div
      class="">
     

      <div class="text-center fs-1 fw-bold">Ver de Pedidos</div>
      <div class="input-group mt-1">
       <div> 

       <table class="table table-success table-striped table-bordered">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">COSTO</th>
            <th scope="col">CANTIDAD</th>
            <th scope="col">TOTAL</th>
</tr>


           
        <?php
        foreach($data as $items) {
            $idProducto = $items['idProducto'];   
        ?>  
        <tr>       
            <td><?php echo $items['idProducto'];?></td>
            <td><?php echo $items['Producto'];?></td>
            <td><?php echo $items['Descripcion'];?></td>
            <td><?php echo $items['Precio'];?></td>
            <td><?php echo $items['Cantidad'];?></td>
            <td><?php echo $items['Precio'];?></td>  
        </tr>
        <?php
        }
        ?>
        </table>


    </div>

