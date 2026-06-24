<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Alocações de Sala</title>
</head>
<body>

<h1>Alocações de Sala</h1>

@include('menu')

<a href="/alocacoes-sala/create">
    Nova Alocação
</a>

<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>Pessoa</th>
        <th>Sala</th>
        <th>Etapa</th>
    </tr>


@foreach ($alocacoes as $alocacao)
    <tr>
        <td>
            {{ $alocacao->pessoa->nome }}
            {{ $alocacao->pessoa->sobrenome }}
        </td>

        <td>
            {{ $alocacao->sala->nome }}
        </td>

        <td>
            {{ $alocacao->etapa->nome }}
        </td>
    </tr>
@endforeach


</table>

</body>
</html>
