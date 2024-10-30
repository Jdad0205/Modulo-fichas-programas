@extends('layouts.app')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fichas</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <div class="container">
        <h1>Actualizar fichas</h1>
        <form action="{{ route('fichas.update', $ficha->id_ficha) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $ficha->nombre) }}" class="form-control" required>
                @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="id_programa_formacion">Programa de Formación:</label>
                <input type="number" name="id_programa_formacion" id="id_programa_formacion" value="{{ old('id_programa_formacion', $ficha->id_programa_formacion) }}" class="form-control" required>
                @error('id_programa_formacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="hora_entrada">Hora de Entrada:</label>
                <input type="time" name="hora_entrada" id="hora_entrada" value="{{ old('hora_entrada', $ficha->hora_entrada) }}" class="form-control" required>
                @error('hora_entrada')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="hora_salida">Hora de Salida:</label>
                <input type="time" name="hora_salida" id="hora_salida" value="{{ old('hora_salida', $ficha->hora_salida) }}" class="form-control" required>
                @error('hora_salida')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="jornada">Jornada:</label>
                <input type="text" name="jornada" id="jornada" value="{{ old('jornada', $ficha->jornada) }}" class="form-control" required>
                @error('jornada')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio', $ficha->fecha_inicio) }}" class="form-control" required>
                @error('fecha_inicio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="fecha_fin">Fecha de Fin:</label>
                <input type="date" name="fecha_fin" id="fecha_fin" value="{{ old('fecha_fin', $ficha->fecha_fin) }}" class="form-control" required>
                @error('fecha_fin')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="fecha_creacion">Fecha de Creación:</label>
                <input type="date" name="fecha_creacion" id="fecha_creacion" value="{{ old('fecha_creacion', $ficha->fecha_creacion) }}" class="form-control" required>
                @error('fecha_creacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Ficha</button>
        </form>
    </div>
</body>
</html>
@endsection