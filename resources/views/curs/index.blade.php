<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curs</title>
</head>

<body>
    @extends('layouts.principal')

    @section('titulo', 'Indice')

    @section('contenido')

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Siglas</th>
                <th>Nombre</th>
                <th>Siglas ciclo</th>
            </tr>
            @foreach ($cursos as $curs)
                <tr>
                    <td>{{ $curs->getId() }}</td>
                    <td>{{ $curs->getSigles() }}</td>
                    <td>{{ $curs->getNom() }}</td>
                    <td>{{ $curs->getSiglesCicle() }}</td>
                </tr>
            @endforeach
        </table>
    @endsection
</body>

</html>
