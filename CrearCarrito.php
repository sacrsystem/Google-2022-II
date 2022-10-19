<?php 
include('index1.php');

$idUsuario = $_SESSION["idUsuario"];
$url = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/verCarrito.php?idUsuario=".$idUsuario;
$data = json_decode(file_get_contents($url),true);
?>

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<br>
<br>
<body>
    <div class="text-center fs-1 fw-bold">MI CARRITO</div>
    <br>
    <br>
    <div class="container">
        <div class="row"></div>
        <table class="table table-striped">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">COSTO</th>
            <th scope="col">CANTIDAD</th>
            <th scope="col"> scope="col"TOTAL</th>
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
            <td><a href = "/f_eliminar_producto_carrito?idUsuario=<?php echo $idUsuario;?>&idProducto=<?php echo $items['idCarrito'];?>"><button class ="btn btn-success">Eliminar</button>  </a></td>  
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

    
    
</body>