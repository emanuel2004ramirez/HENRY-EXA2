@extends('layouts.app')
@section('contenido')
    <h1>Crear equipo</h1>
    <form method="POST" action="{{ route('equipos.store') }}">
        @csrf
        <label for="codigo">Código</label>
        <input id="codigo" name="codigo" type="text" value="{{ old('codigo') }}" maxlength="30" required>

        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" value="{{ old('nombre') }}" maxlength="100" required>

        <label for="marca">Marca</label>
        <input id="marca" name="marca" type="text" value="{{ old('marca') }}" maxlength="80" required>

        <label for="fecha_adquisicion">Fecha de adquisición</label>
        <input id="fecha_adquisicion" name="fecha_adquisicion" type="date" value="{{ old('fecha_adquisicion') }}" required>

        <label for="estado">Estado</label>
        <select id="estado" name="estado" required>
            <option value="">Seleccione un estado</option>
            <option value="disponible" @selected(old('estado') === 'disponible')>Disponible</option>
            <option value="asignado" @selected(old('estado') === 'asignado')>Asignado</option>
            <option value="mantenimiento" @selected(old('estado') === 'mantenimiento')>Mantenimiento</option>
        </select>

        <button type="submit">Guardar</button>
    </form>
    <p><a href="{{ route('equipos.index') }}">Volver al listado</a></p>
@endsection
