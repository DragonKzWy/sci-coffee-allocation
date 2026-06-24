<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta de Sala</title>
</head>
<body>

<h1>{{ $sala->nome }}</h1>

<p>
    <strong>Lotação:</strong>
    {{ $sala->lotacao }}
</p>

<h2>Pessoas por Etapa</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Etapa</th>
        <th>Pessoa</th>
    </tr>

    @foreach ($sala->alocacoesSala as $alocacao)
        <tr>
            <td>
                {{ $alocacao->etapa->nome }}
            </td>

            <td>
                {{ $alocacao->pessoa->nome }}
                {{ $alocacao->pessoa->sobrenome }}
            </td>
        </tr>
    @endforeach
</table>

<br>

<a href="/salas">
    Voltar
</a>

</body>
</html>