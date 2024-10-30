<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fichas pdf</title>
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
<h1>FICHAS</h1> 
    <hr>

    <br><br> <table class="table table-striped table-bordered table-hover">
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
                <td>{{ $ficha->created_at }}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
