# Sistema de Gerenciamento de Treinamento

Aplicação desenvolvida em Laravel para gerenciamento de participantes, salas e espaços de café de um evento corporativo.

O sistema permite cadastrar participantes, salas e espaços de café, realizar alocações respeitando regras de lotação e consultar a distribuição dos participantes ao longo das etapas do evento.

---

## Tecnologias Utilizadas

- PHP 8.3
- Laravel 13
- MySQL 8
- Docker
- Docker Compose
- Blade Templates

---

## Funcionalidades

### Cadastro de Pessoas
Permite cadastrar participantes informando:

- Nome
- Sobrenome

---

### Cadastro de Salas
Permite cadastrar salas do evento informando:

- Nome
- Lotação máxima

---

### Cadastro de Espaços de Café
Permite cadastrar espaços de café informando:

- Nome
- Lotação máxima

---

### Alocação de Salas
Permite associar participantes às salas em cada etapa do evento.

Regras implementadas:

- Um participante não pode estar em duas salas na mesma etapa.
- A lotação máxima da sala é respeitada.

---

### Alocação de Espaços de Café
Permite associar participantes aos espaços de café em cada intervalo.

Regras implementadas:

- Um participante não pode estar em dois espaços de café no mesmo intervalo.
- A lotação máxima do espaço de café é respeitada.

---

### Consultas

#### Consulta de Pessoa
Exibe:

- Salas atribuídas por etapa.
- Espaços de café atribuídos por intervalo.

#### Consulta de Sala
Exibe:

- Lista de participantes alocados por etapa.

#### Consulta de Espaço de Café
Exibe:

- Lista de participantes alocados por intervalo.

---

## Modelagem

### Pessoa

- id
- nome
- sobrenome

### Sala

- id
- nome
- lotacao

### EspacoCafe

- id
- nome
- lotacao

### Etapa

- id
- nome
- ordem

### AlocacaoSala

- pessoa_id
- sala_id
- etapa_id

### AlocacaoCafe

- pessoa_id
- espaco_cafe_id
- intervalo

---

## Estrutura do Projeto

```
app/
├── Http/Controllers
├── Models

database/
├── migrations
├── seeders

resources/views/
├── pessoas
├── salas
├── espacos_cafe
├── alocacoes_sala
├── alocacoes_cafe
```

---

## Executando o Projeto

### Pré-requisitos

- Docker
- Docker Compose
- Git

### Clonar o repositório

```
git clone https://github.com/DragonKzWy/sci-coffee-allocation.git
cd sci-coffee-allocation
```

### Subir os containers

```
docker compose up -d
```

### Executar migrations e seeders

> Atenção: este comando redefine o banco de dados.

```
docker compose exec app php artisan migrate:fresh --seed
```

### Acessar a aplicação

```
http://localhost:8080
```

---

## Dados Iniciais

O projeto utiliza Seeder para criar automaticamente as etapas do evento:

- Etapa 1
- Etapa 2

Esse dado é carregado ao executar:

```
php artisan migrate:fresh --seed
```

---

## Regras de Negócio Implementadas

### Salas

- Uma pessoa não pode estar em duas salas na mesma etapa.
- A lotação da sala não pode ser excedida.

### Espaços de Café

- Uma pessoa não pode estar em dois espaços de café no mesmo intervalo.
- A lotação do espaço de café não pode ser excedida.

---

## Autor
Wesley Santos da Silva

Analista de Sistemas com experiência em suporte, infraestrutura e desenvolvimento de soluções utilizando tecnologias web e ambientes Linux.
