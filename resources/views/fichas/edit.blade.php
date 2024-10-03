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
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $ficha->nombre) }}" required>
                @if ($errors->has('nombre'))
                <span style="color: red;">{{ $errors->first('nombre') }}</span>
                @endif
            </div>

            <div>
                <label for="id_programa_formacion">Programa de Formación:</label>
                <input type="number" name="id_programa_formacion" id="id_programa_formacion" value="{{ old('id_programa_formacion', $ficha->id_programa_formacion) }}" required>
                @if ($errors->has('id_programa_formacion'))
                <span style="color: red;">{{ $errors->first('id_programa_formacion') }}</span>
                @endif
            </div>

            <div>
                <label for="hora_entrada">Hora de Entrada:</label>
                <input type="time" name="hora_entrada" id="hora_entrada" value="{{ old('hora_entrada', $ficha->hora_entrada) }}" required>
                @if ($errors->has('hora_entrada'))
                <span style="color: red;">{{ $errors->first('hora_entrada') }}</span>
                @endif
            </div>

            <div>
                <label for="hora_salida">Hora de Salida:</label>
                <input type="time" name="hora_salida" id="hora_salida" value="{{ old('hora_salida', $ficha->hora_salida) }}" required>
                @if ($errors->has('hora_salida'))
                <span style="color: red;">{{ $errors->first('hora_salida') }}</span>
                @endif
            </div>

            <div>
                <label for="jornada">Jornada:</label>
                <input type="text" name="jornada" id="jornada" value="{{ old('jornada', $ficha->jornada) }}" required>
                @if ($errors->has('jornada'))
                <span style="color: red;">{{ $errors->first('jornada') }}</span>
                @endif
            </div>

            <div>
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio', $ficha->fecha_inicio) }}" required>
                @if ($errors->has('fecha_inicio'))
                <span style="color: red;">{{ $errors->first('fecha_inicio') }}</span>
                @endif
            </div>

            <div>
                <label for="fecha_fin">Fecha de Fin:</label>
                <input type="date" name="fecha_fin" id="fecha_fin" value="{{ old('fecha_fin', $ficha->fecha_fin) }}" required>
                @if ($errors->has('fecha_fin'))
                <span style="color: red;">{{ $errors->first('fecha_fin') }}</span>
                @endif
            </div>

            <div>
                <label for="fecha_creacion">Fecha de Creación:</label>
                <input type="date" name="fecha_creacion" id="fecha_creacion" value="{{ old('fecha_creacion', $ficha->fecha_creacion) }}" required>
                @if ($errors->has('fecha_creacion'))
                <span style="color: red;">{{ $errors->first('fecha_creacion') }}</span>
                @endif
            </div>
            <button type="submit">Actualizar Ficha</button>
        </form>
    </div>
</body>
</html>