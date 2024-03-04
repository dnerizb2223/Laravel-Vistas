<!-- resources/views/cursos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Cursos</title>
</head>
<body>
    <h1>Llistat de Cursos</h1>
    <ul>
        @foreach($cursos as $curs)
            <li>{{ $curs['nom'] }} ({{ $curs['sigles'] }}) - Cicle: {{ $curs['siglesCicle'] }}</li>
        @endforeach
    </ul>

    {{-- Afegit per veure el contingut de la variable $cursos --}}
    <pre>{{ print_r($cursos) }}</pre>
</body>
</html>
