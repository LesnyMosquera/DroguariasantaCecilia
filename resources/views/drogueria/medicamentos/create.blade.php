<div>
    <form action="/medicamento" method="post">
        @csrf
        <label for="codigo">Código
            <input type="text" name="codigo" id=""codigo>
        </label>
        <label for="invima">Registro invima
            <input type="text" name="invima" id="invima">
        </label>
        <label for="nombre">Nombre
            <input type="text" name="nombre" id="nombre">
        </label>
        <label for="presentacion">Presentación
            <select name="presentacion" id="presentacion">
                @foreach($presentacion as $presentaciones)
                <option value="{{ $presentaciones->presentacion }}">{{ $presentaciones->presentacion }}</option>
                @endforeach
            </select>
        </label>
        <label for="lote">Lote
            <input type="text" name="lote" id="lote">
        </label>
        <label for="composicion">Composición
            <input type="text" name="composicion" id="composicion">
        </label>
        <label for="tipo">Tipo
            <select name="tipoMedicamento" id="tipo">
                @foreach($tipoMedicamento as $tipoMedicamentos)
                <option value="{{ $tipoMedicamentos->tipoMedicamento }}">{{ $tipoMedicamentos->tipoMedicamento }}</option>
                @endforeach
            </select>
        </label>
        <label for="administracion">Via de Administración
            <select name="administracion" id="administracion">
                @foreach($viaAdministracion as $viaAdministracions)
                <option value="{{ $viaAdministracions->viaAdministracion }}">{{ $viaAdministracions->viaAdministracion }}</option>
                @endforeach
            </select>
        </label>
        <label for="laboratorio">Laboratorio
            <select name="laboratorio" id="laboratorio">
                @foreach($laboratorio as $laboratorios)
                <option value="{{ $laboratorios->laboratorio }}">{{ $laboratorios->laboratorio }}</option>
                @endforeach

            </select>

        </label>
        <label for="proveedor">Proveedor
            <input type="text" name="proveedor" id="proveedor">
        </label>

<input type="submit" value="Guardar">
    </form>
</div>
