
  <?php include('index.php'); ?>

  <form action ="f_registro_usuario.php" method="post">
    <div class="bg-secondary.bg-gradient p-5 rounded-5 text-secondary shadow"
      style="width: 25rem">
      <div class="text-center fs-1 fw-bold">Registro</div>
      <div class="input-group mt-4">
        <div class="input-group-text btn btn-dark">
        <label for="nombreSeccion">correo</label><br>
        </div>
        <input class="form-control bg-light" type="text" placeholder="Correo" name="correo"/>
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text btn btn-dark">
        <label for="nombreSeccion">Contraseña</label><br>
        </div>
        <input class="form-control bg-light" type="password" placeholder="Contraseña" name="contrasena"/>
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text btn btn-dark">
        <label for="nombreSeccion">Usuario</label>
        </div>
        <div class="col-md-8">
			<label for="usuario"></label>
			<select class="form-control" id="usuario" name="usuario">
			  <option value="cliente">cliente</option>
        <option value="administrador">adminitrador</option>
      </select>
		</div> 

    </div>
    <input type="submit" class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm" value="REGISTRO"/>
     
    </div>

    </div>
</form>


