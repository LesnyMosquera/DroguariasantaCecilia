

<form action="/cliente" method="POST">
    @csrf


  <div class="form-group">
          <label for="nit">Cedula / Nit</label>
          <input type="text" name="nit" id="nit" class="form-control">
  </div>

  <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
  </div>
  <div class="form-group">
    <label for="genero">Genero</label>
        <input type="text" name="genero" id="genero" class="form-control">
    </div>

  <div class="form-group">
          <label for="direccion">Dirección</label>
              <input type="text" name="direccion" id="direccion" class="form-control">
  </div>

  <div class="form-group">
          <label for="ciudad">Ciudad</label>
              <input type="text" name="ciudad" id="ciudad" class="form-control">
  </div>

  <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="text" name="telefono" id="telefono" class="form-control">
  </div>


  <div class="form-group">
          <label for="email">Correo Electronico</label>
              <input type="email" name="email" id="email" class="form-control">
  </div>




  <input type="submit" value="Guardar" class="btn btn-danger">
</form>
