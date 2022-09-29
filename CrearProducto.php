<?php include('indexA.php'); ?>

<form action="f_agregar_producto" method="POST"  enctype="multipart/form-data">
    <div class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow"
      style="width: 35rem">
      <div class="text-center fs-1 fw-bold">Crear Producto</div>
      <div class="input-group mt-1">
       <div> 
            <div>
                <label for="producto">Nombre Producto</label>
                <input type="text" name="producto" id="producto" class="form-control">
            </div>
            <div>
                <label for="descripcion">Detaller Mueble</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control">
            </div>
            <div>
                <label for="stock">Cantidad</label>
                <input type="text" name="stock" id="stock" class="form-control">
            </div>
            <div>
                <label for="imagen">imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control">
            </div>

            <div>

                <input type="submit" class="btn btn-warning" value="REGISTRAR"/>
            </div>
    </div>
<form>


