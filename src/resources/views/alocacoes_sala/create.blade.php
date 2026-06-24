<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alocação de Sala</title>
</head>
<body>

<h1>Nova Alocação de Sala</h1>

@if ($errors->any())
    <div style="color: red; margin-bottom: 20px;">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/alocacoes-sala">
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
        <label>Sala</label>
        <select name="sala_id" required>
            @foreach ($salas as $sala)
                <option value="{{ $sala->id }}">
                    {{ $sala->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Etapa</label>
        <select name="etapa_id" required>
            @foreach ($etapas as $etapa)
                <option value="{{ $etapa->id }}">
                    {{ $etapa->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <button type="submit">
        Salvar
    </button>

</form>

</body>
</html>