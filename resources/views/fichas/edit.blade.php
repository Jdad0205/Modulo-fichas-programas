<h1>Editar fichas.</h1>
<form action="{{ route('fichas.update', $ficha->id_ficha) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $ficha->nombre) }}" required>
        @if ($errors->has('nombre'))
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="id_programa_formacion">Programa de Formación:</label>
        <input type="number" name="id_programa_formacion" id="id_programa_formacion" class="form-control" value="{{ old('id_programa_formacion', $ficha->id_programa_formacion) }}" required>
        @if ($errors->has('id_programa_formacion'))
            <span class="text-danger">{{ $errors->first('id_programa_formacion') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="hora_entrada">Hora de Entrada:</label>
        <input type="time" name="hora_entrada" id="hora_entrada" class="form-control" value="{{ old('hora_entrada', $ficha->hora_entrada) }}" required>
        @if ($errors->has('hora_entrada'))
            <span class="text-danger">{{ $errors->first('hora_entrada') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="hora_salida">Hora de Salida:</label>
        <input type="time" name="hora_salida" id="hora_salida" class="form-control" value="{{ old('hora_salida', $ficha->hora_salida) }}" required>
        @if ($errors->has('hora_salida'))
            <span class="text-danger">{{ $errors->first('hora_salida') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="jornada">Jornada:</label>
        <input type="text" name="jornada" id="jornada" class="form-control" value="{{ old('jornada', $ficha->jornada) }}" required>
        @if ($errors->has('jornada'))
            <span class="text-danger">{{ $errors->first('jornada') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ old('fecha_inicio', $ficha->fecha_inicio) }}" required>
        @if ($errors->has('fecha_inicio'))
            <span class="text-danger">{{ $errors->first('fecha_inicio') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="{{ old('fecha_fin', $ficha->fecha_fin) }}" required>
        @if ($errors->has('fecha_fin'))
            <span class="text-danger">{{ $errors->first('fecha_fin') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="fecha_creacion">Fecha de Creación:</label>
        <input type="date" name="fecha_creacion" id="fecha_creacion" class="form-control" value="{{ old('fecha_creacion', $ficha->fecha_creacion) }}" required>
        @if ($errors->has('fecha_creacion'))
            <span class="text-danger">{{ $errors->first('fecha_creacion') }}</span>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Ficha</button>
</form>
