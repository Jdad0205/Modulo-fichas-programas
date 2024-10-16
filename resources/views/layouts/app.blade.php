<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <img src="" alt="">
        <div class="logo">Ambientes</div>
        <ul class="nav-links">
            <button class="btn-cerrar">Cerrar sesion</button>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
        <ul>
            <li><a href="">Programas</a></li>
            <li><a href="">Fichas</a></li>
        </ul>
    </aside>

    <!-- Contenido Principal -->
    <main class="main-content">
        @yield('contenido')
    </main>

</body>
</html>
