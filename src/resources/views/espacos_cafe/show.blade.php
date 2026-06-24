<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta de Espaço de Café</title>
</head>
<body>

<h1>{{ $espacoCafe->nome }}</h1>

<p>
    <strong>Lotação:</strong>
    {{ $espacoCafe->lotacao }}
</p>

<h2>Pessoas por Intervalo</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Intervalo</th>
        <th>Pessoa</th>
    </tr>

    @foreach ($espacoCafe->alocacoesCafe as $alocacao)
        <tr>
            <td>{{ $alocacao->intervalo }}</td>

            <td>
                {{ $alocacao->pessoa->nome }}
                {{ $alocacao->pessoa->sobrenome }}
            </td>
        </tr>
    @endforeach
</table>

<br>

<a href="/espacos-cafe">
    Voltar
</a>

</body>
</html>