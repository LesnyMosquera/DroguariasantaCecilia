
<form action="/viaadministracion" method="POST">
    @csrf


  <div class="form-group">
          <label for="viaAdministracion">Via de administracion</label>
          <input type="text" name="viaAdministracion" id="viaAdministracion" class="form-control">
  </div>


  <input type="submit" value="Guardar" class="btn btn-danger">
</form>
