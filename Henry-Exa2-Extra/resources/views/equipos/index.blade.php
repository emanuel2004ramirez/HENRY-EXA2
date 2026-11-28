@extends('layouts.app')
@section('contenido')
    <h1>Equipos registrados</h1>
    <p><a href="{{ route('equipos.create') }}">Crear equipo</a></p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Fecha de adquisición</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td>
                    <td>{{ $equipo->codigo }}</td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->marca }}</td>
                    <td>{{ $equipo->fecha_adquisicion->format('d/m/Y') }}</td>
                    <td>{{ $equipo->estado }}</td>
                    <td><a href="{{ route('equipos.edit', $equipo->id) }}">Editar</a></td>
                </tr>
            @empty
                <tr><td colspan="7">No hay equipos registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
