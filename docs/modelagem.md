# Modelagem do Sistema

## Entidades

### Pessoas

Campos:

* id
* nome
* sobrenome

### Salas

Campos:

* id
* nome
* lotacao

### EspacosCafe

Campos:

* id
* nome
* lotacao

### Etapas

Campos:

* id
* nome

Registros esperados:

* Etapa 1
* Etapa 2

### AlocacoesSala

Campos:

* id
* pessoa_id
* sala_id
* etapa_id

Objetivo:

Registrar em qual sala uma pessoa participará durante uma determinada etapa.

### AlocacoesCafe

Campos:

* id
* pessoa_id
* espaco_cafe_id
* intervalo

Objetivo:

Registrar em qual espaço de café uma pessoa participará durante um determinado intervalo.

Valores esperados para intervalo:

* 1 = Café 1
* 2 = Café 2

## Relacionamentos

Pessoa -> AlocacaoSala

Sala -> AlocacaoSala

Etapa -> AlocacaoSala

Pessoa -> AlocacaoCafe

EspacoCafe -> AlocacaoCafe

## Regras de Negócio

### Salas

* Uma pessoa deve estar em uma sala na Etapa 1.
* Uma pessoa deve estar em uma sala na Etapa 2.
* A lotação máxima da sala não pode ser ultrapassada.

### Espaços de Café

* Uma pessoa deve estar em um espaço de café no Intervalo 1.
* Uma pessoa deve estar em um espaço de café no Intervalo 2.
* A lotação máxima do espaço de café não pode ser ultrapassada.

### Integridade

* Não pode existir uma alocação de sala sem uma pessoa.
* Não pode existir uma alocação de sala sem uma sala.
* Não pode existir uma alocação de sala sem uma etapa.
* Não pode existir uma alocação de café sem uma pessoa.
* Não pode existir uma alocação de café sem um espaço de café.
