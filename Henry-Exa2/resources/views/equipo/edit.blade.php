<form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="codigo">Código:</label>
    <input type="text" name="codigo" id="codigo" required value="{{ $equipo->codigo }}"><br>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required value="{{ $equipo->nombre }}"><br>

    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" required value="{{ $equipo->marca }}"    ><br>

    <label for="fecha_adquisicion">Fecha de Adquisición:</label>
    <input type="date" name="fecha_adquisicion" id="fecha_adquisicion" required value="{{ $equipo->fecha_adquisicion }}"><br>

    <label for="estado">Estado:</label>
    <select name="estado" id="estado" required value="{{ $equipo->estado }}">
        <option value="Disponible">Disponible</option>
        <option value="En uso">En uso</option>
        <option value="Mantenimiento">Mantenimiento</option>
    </select><br>

    <button type="submit">Guardar</button>
</form>