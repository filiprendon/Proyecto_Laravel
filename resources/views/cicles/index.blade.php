<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cicles</title>
</head>

<body>
    @extends('layouts.principal')

    @section('titulo', 'Indice')

    @section('contenido')
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Siglas</th>
        </tr>
        @foreach ($cicles as $cicle)
                <tr>
                    <td>{{$cicle->getId()}}</td>
                    <td>{{$cicle->getNom()}}</td>
                    <td>{{$cicle->getSigles()}}</td>
                </tr>
            
        @endforeach
</table>
    @endsection
</body>

</html>
