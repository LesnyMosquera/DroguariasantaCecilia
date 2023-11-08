
<form action="/presentacion" method="POST">
    @csrf


  <div class="form-group">
          <label for="presentacion">Presentación</label>
          <input type="text" name="presentacion" id="presentacion" class="form-control">
  </div>


  <input type="submit" value="Guardar" class="btn btn-danger">
</form>
