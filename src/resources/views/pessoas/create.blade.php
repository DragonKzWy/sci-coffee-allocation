<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Sala</title>
</head>
<body>

<h1>Cadastro de Sala</h1>

<form method="POST" action="/salas">
    @csrf

<div>
    <label>Nome</label>
    <input type="text" name="nome" required>
</div>

<br>

<div>
    <label>Lotação</label>
    <input type="number" name="lotacao" min="1" required>
</div>

<br>

<button type="submit">
    Salvar
</button>

</form>

</body>
</html>
