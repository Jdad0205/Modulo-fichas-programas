@extends('layouts.app')
@section('titulo','Fichas')
@section('contenido')
<div class=" mt-4">
    <a href="{{ route('fichas.create') }}" class="Create-pro">Crear Ficha</a>

    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID Ficha</th>
                <th>Programa de Formación</th>
                <th>Nombre</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
                <th>Jornada</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fichas as $ficha)
            <tr>
                <td>{{ $ficha->id_ficha }}</td>
                <td>{{ $ficha->namePrograma }}</td>
                <td>{{ $ficha->nombre }}</td>
                <td>{{ $ficha->hora_entrada }}</td>
                <td>{{ $ficha->hora_salida }}</td>
                <td>{{ $ficha->jornada }}</td>
                <td>{{ $ficha->fecha_inicio }}</td>
                <td>{{ $ficha->fecha_fin }}</td>
                <td>{{ $ficha->created_at}}</td>
                <td>
                    <a href="{{ route('fichas.edit', $ficha->id_ficha) }}" class="btn btn-warning "><i class="bi bi-pencil"></i></a>

                    <form action="{{ route('fichas.destroy', $ficha->id_ficha) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta ficha?')"><i class="bi bi-x-circle"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection