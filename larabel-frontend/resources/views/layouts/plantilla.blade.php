<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tituloPagina')</title>
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- TAILWINDCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      /* Estilos personalizados */
      .navbar-vertical {
        width: 250px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #343a40;
        overflow-x: hidden;
        transition: all 0.3s;
      }
      .navbar-vertical:hover {
        width: 250px;
      }
      .navbar-vertical.collapsed {
        width: 60px;
      }
      .navbar-vertical .nav-link {
        color: #fff;
      }
      .navbar-vertical .nav-link:hover {
        background-color: #495057;
      }
      .navbar-vertical .collapse.show {
        display: block;
      }
      .navbar-vertical .collapse {
        display: none;
      }
      .navbar-vertical:hover .collapse {
        display: block;
      }
    </style>

</head>
<body>

  <div class="navbar-vertical bg-dark">
    <nav class="nav flex-column">
      <a class="nav-link" href="#item1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">Item 1</a>
      <div class="collapse" id="submenu1">
        <a class="nav-link ml-3" href="#">Subitem 1-1</a>
        <a class="nav-link ml-3" href="#">Subitem 1-2</a>
      </div>
      <a class="nav-link" href="#item2" data-toggle="collapse" data-target="#submenu2" aria-expanded="false">Item 2</a>
      <div class="collapse" id="submenu2">
        <a class="nav-link ml-3" href="#">Subitem 2-1</a>
        <a class="nav-link ml-3" href="#">Subitem 2-2</a>
      </div>
      <a class="nav-link" href="#item3" data-toggle="collapse" data-target="#submenu3" aria-expanded="false">Item 3</a>
      <div class="collapse" id="submenu3">
        <a class="nav-link ml-3" href="#">Subitem 3-1</a>
        <a class="nav-link ml-3" href="#">Subitem 3-2</a>
      </div>
    </nav>
  </div>




        {{-- este es el espacio donde vamos a escribir todo adentro --}}
    <div class="container">
        @yield('contenido')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Colapsar el navbar al seleccionar un item
  $('.nav-link').on('click', function() {
    if ($('.navbar-vertical').hasClass('collapsed')) {
      $('.navbar-vertical').removeClass('collapsed');
    } else {
      $('.navbar-vertical').addClass('collapsed');
    }
  });
</script>


    
</body>

</html>
