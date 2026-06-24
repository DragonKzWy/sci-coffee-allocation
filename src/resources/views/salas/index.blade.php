<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Salas</title>
</head>
<body>

<h1>Lista de Salas</h1>

<a href="/salas/create">
    Nova Sala
</a>

<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Lotação</th>
    </tr>


@foreach ($salas as $sala)
    <tr>
        <td>{{ $sala->id }}</td>
        <td>{{ $sala->nome }}</td>
        <td>{{ $sala->lotacao }}</td>
    </tr>
@endforeach


</table>

</body>
</html>
