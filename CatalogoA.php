<?php include('indexA.php'); 

$stringApi = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/listaProductos.php";
$data = json_decode(file_get_contents($stringApi),true);

?>
  <link href="/estilos.css" rel="stylesheet">
    <!--Contenido-->
    <main>
    
        <div class="container">
        <div class="text-center fs-1 fw-bold">CATALOGO</div>
        <br>
        <br>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
                    foreach ( $data as $items ) {
                      $idProducto = $items['idProducto'];   
                    ?>
                <div class="col">
                    <div class="card shadow-sm">

                    <img src="imagen/<?php echo $items['Imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title" ><?php echo $items['Producto']; ?></h5>
                          <p class="card-text"><?php echo $items['Descripcion'];?></p>
                          <p class="card-text"><?php echo $items['Precio'];?></p>
                          <p class="card-text"><?php echo $items['Stock'];?></p>
                          <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <a href="/EditarProducto?idProducto='<?php echo $idProducto;?>'" class="btn btn-primary">Editar</a>
                          </div>
                          <a href="/f_eliminar_producto?idProducto=<?php echo $idProducto;?>" class="btn btn-primary">Eliminar</a>
                        </div>
                        </div>    
                    </div>
                </div>
                <?php
                      }
                    ?>
            </div>
        </div>
        
        
        

    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--
        Marko Robles
        Códigos de Programación
        2021
    -->

    <html lang="es">







   




   