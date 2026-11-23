<h1>HOLA</h1>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Cerrar sesión</button>
</form>

<a href="{{ route('equipos.create') }}" class="btn btn-primary">Agregar Equipo</a>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Fecha de Adquisición</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->id }}</td>
                <td>{{ $equipo->codigo }}</td>
                <td>{{ $equipo->nombre }}</td>
                <td>{{ $equipo->marca }}</td>
                <td>{{ $equipo->fecha_adquisicion }}</td>
                <td>{{ $equipo->estado }}</td>
                <td>
                    <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este equipo?')">Eliminar</button>
                    </form>
                </td>
                    
            </tr>
        @endforeach
    </tbody>
</table>