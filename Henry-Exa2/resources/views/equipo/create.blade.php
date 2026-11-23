<form action="{{ route('equipos.store') }}" method="POST">
    @csrf
    <label for="codigo">Código:</label>
    <input type="text" name="codigo" id="codigo" required><br>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required><br>

    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" required><br>

    <label for="fecha_adquisicion">Fecha de Adquisición:</label>
    <input type="date" name="fecha_adquisicion" id="fecha_adquisicion" required><br>

    <label for="estado">Estado:</label>
    <select name="estado" id="estado" required>
        <option value="Disponible">Disponible</option>
        <option value="En uso">En uso</option>
        <option value="Mantenimiento">Mantenimiento</option>
    </select><br>

    <button type="submit">Guardar</button>
</form>