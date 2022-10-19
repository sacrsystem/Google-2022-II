<?php include('indexA.php'); ?>
<br>
<br>
<form action="/f_agregar_producto" method="POST"  enctype="multipart/form-data">
<div class="d-grid gap-3 col-4 mx-auto">
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
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control">
                
                </textarea>
                
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
                <label for="stock">Producto 3D</label>
                <input type="text" name="tresd" id="tresd" class="form-control">
            </div>
            <div>
                <label for="imagen">imagen</label>
                <input type="file" name="fotito" id="seleccionArchivos" class="form-control">
                <input type="file" name="imagen" id="imagen" class="form-control">
                <img class="img-thumbnail" id="imagenPrevisualizacion" src=""><br>
            </div>
            
            <div>

                <input type="submit" class="btn btn-warning" value="REGISTRAR"/>
            </div>
    </div>
</div>
<form>

<script>
    const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
    $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

// Escuchar cuando cambie
$seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
  var imagenes = document.getElementById("seleccionArchivos").files[0].name;
  imagen.value=imagenes;
  $("#descripcion").load("/busqueda?imagenes="+imagenes);
 
  
  
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>


