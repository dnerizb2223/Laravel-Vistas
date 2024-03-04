<!-- resources/views/cicles/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Cicles</title>
</head>
<body>
    <h1>Llistat de Cicles</h1>
    <ul>
        @foreach($cicles as $cicle)
            <li>{{ $cicle['nom'] }} ({{ $cicle['sigles'] }})</li>
        @endforeach
    </ul>

    {{-- Afegit per veure el contingut de la variable $cicles --}}
    <pre>{{ print_r($cicles) }}</pre>
</body>
</html>