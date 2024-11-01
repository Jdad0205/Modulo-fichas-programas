<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            color: green;
            font-size: 24px;
        }
        hr {
            margin-bottom: 20px;
        }
        .tabla {
            background-color: black;
            color: white;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: black;
            color: white;
            text-align: center;
        }
        .table td {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>PROGRAMAS</h1> 
<table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Versión</th>
                <th>Fecha de Creación</th>
                <th>Red de Conocimiento</th>
                <th>Duración (meses)</th>
                <th>Requisitos de Ingreso</th>
                <th>Requisitos de Formación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programas as $programa)
            <tr>
                <td>{{ $programa->id }}</td>
                <td>{{ $programa->nombre }}</td>
                <td>{{ $programa->version }}</td>
                <td>{{ $programa->created_at }}</td>
                <td>{{ $programa->nombreRed}}</td>
                <td>{{ $programa->duracion_meses }}</td>
                <td>{{ $programa->requisitos_ingreso }}</td>
                <td>{{ $programa->requisitos_formacion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>