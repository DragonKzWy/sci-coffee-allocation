<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta de Alocação de Sala</title>
</head>
<body>

<h1>Alocação de Sala</h1>

@include('menu')

<p>
    <strong>Pessoa:</strong>
    {{ $alocacao->pessoa->nome }} {{ $alocacao->pessoa->sobrenome }}
</p>

<p>
    <strong>Sala:</strong>
    {{ $alocacao->sala->nome }}
</p>

<p>
    <strong>Etapa:</strong>
    {{ $alocacao->etapa->nome }}
</p>

<br>

<a href="/alocacoes-sala">
    Voltar
</a>

</body>
</html>