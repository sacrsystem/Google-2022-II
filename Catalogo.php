<?php include('index.php'); 

$stringApi = "https://restaurantesofi.000webhostapp.com/serviciosMuebles/listaProductos.php";
$data = json_decode(file_get_contents($stringApi),true);


?>

    <div class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow mt-1" style="width: 90rem">
      <div class="text-center fs-1 fw-bold">CATALOGO</div>
      <div class="input-group mt-1">
       <div> 
       <div>

           <div class="tab-pane fade show" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab" tabindex="0">
                    <div class="row gy-3">


                    <?php
                    foreach ( $data as $items ) {
                      $idProducto = $items['idProducto'];   
                    ?>

                        <div class="col-lg-3 col-sm-5">
                            <div class="menu-item bg-white shadow-on-hover">
                            <div class="col">
                                <div class="card h-100">
                                  <img src="imagen/<?php echo $items['Imagen']; ?>" class="card-img-top" alt="...">
                                  <div class="card-body">
                                  <h5 class="card-title" ><?php echo $items['Producto']; ?></h5>

                                    <p class="card-text"><?php echo $items['Descripcion'];?></p>
                                    <p class="card-text"><?php echo $items['Precio'];?></p>
                                    <p class="card-text"><?php echo $items['Stock'];?></p>
                                    <a href="#" class="btn btn-primary">Carrito</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                    <?php
                      }
                    ?>

                   

                    </div>
                  </div>
            </div>

      </div>
      </div>
    </div>
    </div>
  </div>





   