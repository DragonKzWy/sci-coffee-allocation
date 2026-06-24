<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta de Pessoa</title>
</head>
<body>

<h1>
    {{ $pessoa->nome }}
    {{ $pessoa->sobrenome }}
</h1>

<h2>Salas por Etapa</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Etapa</th>
        <th>Sala</th>
    </tr>

    @foreach ($pessoa->alocacoesSala as $alocacao)
        <tr>
            <td>{{ $alocacao->etapa->nome }}</td>
            <td>{{ $alocacao->sala->nome }}</td>
        </tr>
    @endforeach
</table>

<br>

<h2>Espaços de Café</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Intervalo</th>
        <th>Espaço</th>
    </tr>

    @foreach ($pessoa->alocacoesCafe as $alocacao)
        <tr>
            <td>{{ $alocacao->intervalo }}</td>
            <td>{{ $alocacao->espacoCafe->nome }}</td>
        </tr>
    @endforeach
</table>

<br>

<a href="/pessoas">
    Voltar
</a>

</body>
</html>