@extends('layouts.principal')

@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Plantilla Bootstrap</title>
  <link rel="stylesheet" href="{{ url('app.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{ url('/ABP_david_neriz/public/')}}"><img src="{{ asset('/media/descarga.png') }}" alt="foto-politecnics" class="foto-politecnics"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dades Mestres
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('cicle')}}">Cicles</a></li>
            <li><a class="dropdown-item" href="{{ url('cursos')}}">Cursos</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h1 class="mb-4">Llistat de Cicles</h1>
    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Sigles</th>
              <th scope="col">Descripcio</th>
              <th scope="col">Actiu</th>
            </tr>
        </thead>
        {{-- <tbody>
            @foreach($cicles as $cicle)
            <tr>
              <td>{{ $cicle->nom }}</td>
              <td>{{ $cicle->sigles }}</td>
              <td>{{ $cicle->descripcio }}</td>
              <td>{{ $cicle->actiu }}</td>
            </tr>
            @endforeach
        </tbody> --}}
    </table>
</div>
</body>
</html>

@endsection