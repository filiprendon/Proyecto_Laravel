<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h3>Hola <?php echo $nombre . ' ' . $apellidos ?></h3> --}}
    <h3>Hola {{$nombre . ' ' . $apellidos}}</h3>

    @if ($nombre == 'Filip')
    {{ 'Eres el mejor' }}
    @else
    {{'Tienes que mejorar'}}
    @endif

    
</body>
</html>