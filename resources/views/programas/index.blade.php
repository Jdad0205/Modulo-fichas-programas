@extends('layouts.app')
@section('titulo','Programas')
@section('contenido')

    
    <div class=" mt-4">

        <a href="{{ route('programas.create') }}" class="Create-pro">Crear Programa</a>


        <table class="table table-bordered table-hover">
            <thead class="">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Versión</th>
                    <th>Fecha de Creación</th>
                    <th>Red de Conocimiento</th>
                    <th>Duración (meses)</th>
                    <th>Requisitos de Ingreso</th>
                    <th>Requisitos de Formación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programas as $programa)
                <tr>
                    <td>{{ $programa->id }}</td>
                    <td>{{ $programa->nombre }}</td>
                    <td>{{ $programa->version }}</td>
                    <td>{{ $programa->created_at}}</td>
                    <td>{{ $programa->red_conocimiento }}</td>
                    <td>{{ $programa->duracion_meses }}</td>
                    <td>{{ $programa->requisitos_ingreso }}</td>
                    <td>{{ $programa->requisitos_formacion }}</td>
                    <td>
                        <a href="{{ route('programas.edit', $programa->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>

                        
                        <form action="{{ route('programas.destroy', $programa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este programa?')"><i class="bi bi-x-circle"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection