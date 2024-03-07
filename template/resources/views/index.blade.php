<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Plantilla Bootstrap</title>

  <!-- Bootstrap CSS y Flatly Theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>

<nav class="navbar navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/ABP_david_neriz/public/') }}">
            <img src="{{ asset('logo.jfif') }}" alt="Logo" height="30" class="d-inline-block align-text-top">
        </a>

        <!-- Enlace desplegable "Dades Mestres" -->
        <div class="dropdown">
        <button onclick="toggleDropdown()" class="dropbtn">Dades Mestres</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="{{ url('/ABP_david_neriz/public/cicles') }}">Cicles</a>
            <a href="{{ url('/ABP_david_neriz/public/cursos') }}">Cursos</a>
        </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <section>
        <h2>Contenido de Ejemplo</h2>
        <p>Bienvenido a la página de ejemplo. Aquí puedes agregar tu contenido específico.</p>
    </section>
</div>

<!-- Bootstrap JS y Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
