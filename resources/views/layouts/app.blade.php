<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">@yield('titulo','mititulo')</div>
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-cerrar">Cerrar sesión</button>
        </form>
        
    </nav>
    <!-- Sidebar -->
    <aside class="sidebar">
        <ul>
        <img src="{{asset('/img/logosena.png')}}" alt="">
            <li><a href="{{ route('welcome') }}">Inicio</a></li>
            <li><a href="{{ route('programas.index') }}">Programas</a></li>
            <li><a href="{{ route('fichas.index') }}">Fichas</a></li>
        </ul>
    </aside>
    <!-- Contenido Principal -->
    <main class="main-content">
        @yield('contenido')
    </main>

</body>
</html>