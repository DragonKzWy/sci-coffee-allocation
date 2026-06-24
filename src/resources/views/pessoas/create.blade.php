<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoa</title>
</head>
<body>

<h1>Cadastro de Pessoa</h1>

@include('menu')

<form method="POST" action="/pessoas">
    @csrf

    <div>
        <label>Nome</label>
        <input
            type="text"
            name="nome"
            required
        >
    </div>

    <br>

    <div>
        <label>Sobrenome</label>
        <input
            type="text"
            name="sobrenome"
            required
        >
    </div>

    <br>

    <button type="submit">
        Salvar
    </button>

</form>

<br>

<a href="/pessoas">
    Voltar
</a>

</body>
</html>