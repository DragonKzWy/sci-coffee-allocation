<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Pessoas</title>
</head>
<body>

<h1>Lista de Pessoas</h1>

<a href="/pessoas/create">
    Nova Pessoa
</a>

<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
    </tr>

@foreach ($pessoas as $pessoa)
    <tr>
        <td>{{ $pessoa->id }}</td>
        <td>{{ $pessoa->nome }}</td>
        <td>{{ $pessoa->sobrenome }}</td>
    </tr>
@endforeach

</table>

</body>
</html>
