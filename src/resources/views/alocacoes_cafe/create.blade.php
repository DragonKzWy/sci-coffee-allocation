<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alocação de Café</title>
</head>
<body>

<h1>Nova Alocação de Café</h1>

@include('menu')

@if ($errors->any())
    <div style="color: red; margin-bottom: 20px;">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/alocacoes-cafe">
    @csrf

    <div>
        <label>Pessoa</label>

        <select name="pessoa_id" required>
            @foreach ($pessoas as $pessoa)
                <option value="{{ $pessoa->id }}">
                    {{ $pessoa->nome }} {{ $pessoa->sobrenome }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Espaço de Café</label>

        <select name="espaco_cafe_id" required>
            @foreach ($espacosCafe as $espacoCafe)
                <option value="{{ $espacoCafe->id }}">
                    {{ $espacoCafe->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Intervalo</label>

        <select name="intervalo" required>
            <option value="1">Intervalo 1</option>
            <option value="2">Intervalo 2</option>
        </select>
    </div>

    <br>

    <button type="submit">
        Salvar
    </button>

</form>

</body>
</html>