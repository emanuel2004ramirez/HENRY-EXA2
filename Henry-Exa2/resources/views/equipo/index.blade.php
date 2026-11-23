<h1>HOLA</h1>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Cerrar sesión</button>
</form>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Fecha de Adquisición</th>
            <th>Estado</th>
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
            </tr>
        @endforeach
    </tbody>
</table>