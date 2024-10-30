@extends('layouts.app')
@section('titulo','Actualizar ficha')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <form action="{{ route('programas.update', $programa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $programa->nombre) }}" class="form-control" required>
                @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="version">Versión:</label>
                <input type="number" name="version" id="version" value="{{ old('version', $programa->version) }}" class="form-control" required>
                @error('version')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="fecha_creacion">Fecha de Creación:</label>
                <input type="date" name="fecha_creacion" id="fecha_creacion" value="{{ old('fecha_creacion', $programa->fecha_creacion) }}" class="form-control" required>
                @error('fecha_creacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="duracion_meses">Duración (meses):</label>
                <input type="number" name="duracion_meses" id="duracion_meses" value="{{ old('duracion_meses', $programa->duracion_meses) }}" class="form-control" required>
                @error('duracion_meses')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="requisitos_ingreso">Requisitos de Ingreso:</label>
                <textarea name="requisitos_ingreso" id="requisitos_ingreso" class="form-control" required>{{ old('requisitos_ingreso', $programa->requisitos_ingreso) }}</textarea>
                @error('requisitos_ingreso')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="requisitos_formacion">Requisitos de Formación:</label>
                <textarea name="requisitos_formacion" id="requisitos_formacion" class="form-control" required>{{ old('requisitos_formacion', $programa->requisitos_formacion) }}</textarea>
                @error('requisitos_formacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="red_conocimiento">Red de Conocimiento:</label>
                <select name="red_conocimiento" id="red_conocimiento" class="form-control">
                    <option value="1" {{ old('red_conocimiento', $programa->red_conocimiento) == '1' ? 'selected' : '' }}>Red de Tecnología</option>
                    <option value="2" {{ old('red_conocimiento', $programa->red_conocimiento) == '2' ? 'selected' : '' }}>Red de Ciencias</option>
                </select>
                @error('red_conocimiento')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Programa</button>
        </form>
    </div>
</body>
</html>
@endsection