<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo</title>
</head>
<body>
    @isset( $titulo )
        <h1>{{ $titulo }}</h1>
    @endisset
    <div>{{ $descripcion }}</div>
    @isset( $paises)
        <ul>
            @foreach( $paises as $pais )
                <li>{{ $pais }}</li>
            @endforeach
        </ul>
    @endisset
</body>
</html>