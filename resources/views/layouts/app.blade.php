<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">@yield('titulo', 'mititulo')</div>
        <form action="{{ route('auth.logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="btn-cerrar">Cerrar sesión</button>
        </form>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
        <img src="{{ asset('/img/logosena.png') }}" alt="Logo SENA" class="sidebar-logo">
        <ul class="sidebar-menu">
            <li><a href="{{ route('welcome') }}">Inicio</a></li>
            <li><a href="{{ route('programas.index') }}">Programas</a></li>
            <li><a href="{{ route('fichas.index') }}">Fichas</a></li>
        </ul>
    </aside>

    <!-- Contenido Principal -->
    <main class="main-content">
        @yield('contenido')
    </main>


    <script>
document.addEventListener('DOMContentLoaded', () => {
  // Get all the navigation links
  let navLinks = document.querySelectorAll('.sidebar a');

  // Add a click event listener to each link
  navLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      // Remove the 'active' class from all links
      navLinks.forEach(l => l.classList.remove('active'));

      // Add the 'active' class to the clicked link
      event.currentTarget.classList.add('active');
    });
  });
});
    </script>
</body>
</html>
