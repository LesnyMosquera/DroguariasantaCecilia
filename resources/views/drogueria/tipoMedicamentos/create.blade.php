
<form action="/tipomedicamento" method="POST">
    @csrf


  <div class="form-group">
          <label for="tipoMedicamento">Tipo de Medicamento</label>
          <input type="text" name="tipoMedicamento" id="tipoMedicamento" class="form-control">
  </div>


  <input type="submit" value="Guardar" class="btn btn-danger">
</form>
