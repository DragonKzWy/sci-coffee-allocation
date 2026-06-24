<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Espaços de Café</title>
</head>
<body>

<h1>Lista de Espaços de Café</h1>

<a href="/espacos-cafe/create">
    Novo Espaço de Café
</a>

<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Lotação</th>
    </tr>

@foreach ($espacosCafe as $espacoCafe)
    <tr>
        <td>{{ $espacoCafe->id }}</td>
        <td>{{ $espacoCafe->nome }}</td>
        <td>{{ $espacoCafe->lotacao }}</td>
    </tr>
@endforeach

</table>

</body>
</html>
