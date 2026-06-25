# Sistema de Gerenciamento de Evento Corporativo

Aplicação desenvolvida em **Laravel** para gerenciamento de participantes, salas e espaços de café de um evento corporativo.

O sistema permite cadastrar participantes, salas e espaços de café, realizar a distribuição dos participantes respeitando regras de negócio e consultar as alocações realizadas durante o evento.

---

# Tecnologias Utilizadas

* PHP 8.3
* Laravel 13
* MySQL 8
* Docker
* Docker Compose
* Blade Templates

---

# Arquitetura

A aplicação foi desenvolvida utilizando o padrão **MVC (Model-View-Controller)** fornecido pelo Laravel.

A estrutura do projeto é composta por:

* **Models**: representam as entidades do domínio da aplicação.
* **Controllers**: implementam as regras de negócio.
* **Views (Blade)**: responsáveis pela interface do usuário.
* **Migrations**: criação e versionamento do banco de dados.
* **Seeders**: inserção de dados iniciais necessários para execução do sistema.

---

# Funcionalidades

## Cadastro de Pessoas

Permite cadastrar participantes informando:

* Nome
* Sobrenome

---

## Cadastro de Salas

Permite cadastrar salas do evento informando:

* Nome
* Lotação máxima

---

## Cadastro de Espaços de Café

Permite cadastrar espaços destinados aos intervalos do evento informando:

* Nome
* Lotação máxima

---

## Alocação de Salas

Permite distribuir participantes nas salas durante cada etapa do treinamento.

### Regras implementadas

* Um participante não pode estar em duas salas na mesma etapa.
* A lotação máxima da sala é respeitada.

---

## Alocação de Espaços de Café

Permite distribuir participantes nos espaços de café durante cada intervalo.

### Regras implementadas

* Um participante não pode estar em dois espaços de café no mesmo intervalo.
* A lotação máxima do espaço de café é respeitada.

---

# Consultas Disponíveis

## Consulta de Pessoa

Exibe:

* Salas atribuídas por etapa.
* Espaços de café atribuídos por intervalo.

---

## Consulta de Sala

Exibe:

* Participantes alocados em cada etapa.

---

## Consulta de Espaço de Café

Exibe:

* Participantes alocados em cada intervalo.

---

# Modelagem

## Pessoa

| Campo     | Tipo    |
| --------- | ------- |
| id        | bigint  |
| nome      | varchar |
| sobrenome | varchar |

---

## Sala

| Campo   | Tipo    |
| ------- | ------- |
| id      | bigint  |
| nome    | varchar |
| lotacao | integer |

---

## EspacoCafe

| Campo   | Tipo    |
| ------- | ------- |
| id      | bigint  |
| nome    | varchar |
| lotacao | integer |

---

## Etapa

| Campo | Tipo    |
| ----- | ------- |
| id    | bigint  |
| nome  | varchar |
| ordem | integer |

---

## AlocacaoSala

Relaciona:

* Pessoa
* Sala
* Etapa

---

## AlocacaoCafe

Relaciona:

* Pessoa
* Espaço de Café
* Intervalo

---

# Estrutura do Projeto

```text
app/
├── Http/
│   └── Controllers/
├── Models/

database/
├── migrations/
└── seeders/

resources/
└── views/
    ├── pessoas/
    ├── salas/
    ├── espacos_cafe/
    ├── alocacoes_sala/
    └── alocacoes_cafe/
```

---

# Executando o Projeto

## Pré-requisitos

* Docker
* Docker Compose
* Git

---

## Clonar o repositório

```bash
git clone https://github.com/DragonKzWy/sci-coffee-allocation.git

cd sci-coffee-allocation
```

---

## Subir os containers

```bash
docker compose up -d
```

---

## Executar as migrations e seeders

> **Atenção:** este comando recria completamente o banco de dados.

```bash
docker compose exec app php artisan migrate:fresh --seed
```

---

## Acessar a aplicação

```
http://localhost:8080
```

---

# Dados Iniciais

O projeto utiliza um Seeder para criar automaticamente as etapas do evento.

Após executar:

```bash
php artisan migrate:fresh --seed
```

serão criadas automaticamente:

* Etapa 1
* Etapa 2

---

# Validações Implementadas

## Pessoas

* Nome obrigatório.
* Sobrenome obrigatório.

---

## Salas

* Nome único.
* Lotação mínima de um participante.

---

## Espaços de Café

* Nome único.
* Lotação mínima de um participante.

---

## Alocações

### Salas

* Impede que uma pessoa seja alocada em duas salas na mesma etapa.
* Impede exceder a capacidade máxima da sala.

### Espaços de Café

* Impede que uma pessoa seja alocada em dois espaços de café no mesmo intervalo.
* Impede exceder a capacidade máxima do espaço de café.

---

# Fluxo da Aplicação

1. Cadastrar participantes.
2. Cadastrar salas.
3. Cadastrar espaços de café.
4. Distribuir participantes nas salas por etapa.
5. Distribuir participantes nos espaços de café por intervalo.
6. Consultar as distribuições realizadas.

---

# Melhorias Futuras

Algumas funcionalidades que poderiam ser adicionadas em versões futuras:

* Interface responsiva utilizando Bootstrap ou Tailwind CSS.
* Autenticação de usuários.
* Distribuição automática de participantes.
* Dashboard com indicadores do evento.
* Testes automatizados (PHPUnit).
* API REST para integração com outros sistemas.

---

# Autor

**Wesley Santos da Silva**

Analista de Sistemas com experiência em suporte técnico, infraestrutura e desenvolvimento de aplicações web.

GitHub: https://github.com/DragonKzWy
