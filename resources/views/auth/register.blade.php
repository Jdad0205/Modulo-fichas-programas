<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <form action="{{ route('auth.register') }}" method="POST" class="form-register">
        @csrf
        <h1>Registro</h1>
        <h4>Nombre:</h2>
        <input type="text" name="name" placeholder="Nombre" required>
        <h4>Email:</h2>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <h4>Contraseña:</h2>
        <input type="password" name="password" placeholder="Contraseña" required>
        <h4>Confime la contraseña:</h4>
        <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
