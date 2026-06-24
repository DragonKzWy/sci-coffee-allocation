<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alocações de Café</title>
</head>
<body>

<h1>Alocações de Café</h1>

<a href="/alocacoes-cafe/create">
    Nova Alocação
</a>

<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>Pessoa</th>
        <th>Espaço de Café</th>
        <th>Intervalo</th>
    </tr>

    @foreach ($alocacoes as $alocacao)
        <tr>
            <td>
                {{ $alocacao->pessoa->nome }}
                {{ $alocacao->pessoa->sobrenome }}
            </td>

            <td>
                {{ $alocacao->espacoCafe->nome }}
            </td>

            <td>
                {{ $alocacao->intervalo }}
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>