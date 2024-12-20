@extends('layouts.app')
@section('titulo','Crear programa')
@section('contenido')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('programas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
        </div>
        <div class="form-group">
            <label for="version">Versión:</label>
            <input type="number" name="version" id="version" class="form-control" value="{{ old('version') }}">
        </div>
        <div class="form-group">
            <label for="duracion_meses">Duración (meses):</label>
            <input type="number" name="duracion_meses" id="duracion_meses" class="form-control" value="{{ old('duracion_meses') }}">
        </div>
        <div class="form-group">
            <label for="red_conocimiento">Red de Conocimiento:</label>
            <select name="red_conocimiento" id="red_conocimiento" class="ancho-btn">
                <option value="">Seleccione</option>
                @foreach ($redes as $red)
                <option value="{{$red->id}}">{{$red->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="requisitos_ingreso">Requisitos de Ingreso:</label>
            <textarea name="requisitos_ingreso" id="requisitos_ingreso" class="form-control">{{ old('requisitos_ingreso') }}</textarea>
        </div>
        <div class="form-group">
            <label for="requisitos_formacion">Requisitos de Formación:</label>
            <textarea name="requisitos_formacion" id="requisitos_formacion" class="form-control">{{ old('requisitos_formacion') }}</textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Crear Programa</button>
    </form>
</div>
@endsection
