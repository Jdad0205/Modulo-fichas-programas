<form action="{{ route('programas.update', $programa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $programa->nombre) }}" required>
        @if ($errors->has('nombre'))
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="version">Versión:</label>
        <input type="number" name="version" id="version" class="form-control" value="{{ old('version', $programa->version) }}" required>
        @if ($errors->has('version'))
            <span class="text-danger">{{ $errors->first('version') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="fecha_creacion">Fecha de Creación:</label>
        <input type="date" name="fecha_creacion" id="fecha_creacion" class="form-control" value="{{ old('fecha_creacion', $programa->fecha_creacion) }}" required>
        @if ($errors->has('fecha_creacion'))
            <span class="text-danger">{{ $errors->first('fecha_creacion') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="duracion_meses">Duración (meses):</label>
        <input type="number" name="duracion_meses" id="duracion_meses" class="form-control" value="{{ old('duracion_meses', $programa->duracion_meses) }}" required>
        @if ($errors->has('duracion_meses'))
            <span class="text-danger">{{ $errors->first('duracion_meses') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="requisitos_ingreso">Requisitos de Ingreso:</label>
        <textarea name="requisitos_ingreso" id="requisitos_ingreso" class="form-control" required>{{ old('requisitos_ingreso', $programa->requisitos_ingreso) }}</textarea>
        @if ($errors->has('requisitos_ingreso'))
            <span class="text-danger">{{ $errors->first('requisitos_ingreso') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="requisitos_formacion">Requisitos de Formación:</label>
        <textarea name="requisitos_formacion" id="requisitos_formacion" class="form-control" required>{{ old('requisitos_formacion', $programa->requisitos_formacion) }}</textarea>
        @if ($errors->has('requisitos_formacion'))
            <span class="text-danger">{{ $errors->first('requisitos_formacion') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="red_conocimiento">Red de Conocimiento:</label>
        <select name="red_conocimiento" id="red_conocimiento" class="form-control">
            <option value="1" {{ old('red_conocimiento', $programa->red_conocimiento) == '1' ? 'selected' : '' }}>Red de Tecnología</option>
            <option value="2" {{ old('red_conocimiento', $programa->red_conocimiento) == '2' ? 'selected' : '' }}>Red de Ciencias</option>
        </select>
        @if ($errors->has('red_conocimiento'))
            <span class="text-danger">{{ $errors->first('red_conocimiento') }}</span>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Programa</button>
</form>
