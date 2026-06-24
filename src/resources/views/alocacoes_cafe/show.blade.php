<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta de Alocação de Café</title>
</head>
<body>

<h1>Alocação de Café</h1>

@include('menu')

<p>
    <strong>Pessoa:</strong>
    {{ $alocacao->pessoa->nome }} {{ $alocacao->pessoa->sobrenome }}
</p>

<p>
    <strong>Espaço de Café:</strong>
    {{ $alocacao->espacoCafe->nome }}
</p>

<p>
    <strong>Intervalo:</strong>
    {{ $alocacao->intervalo }}
</p>

<br>

<a href="/alocacoes-cafe">
    Voltar
</a>

</body>
</html>