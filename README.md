# PROGRAMA DE ESTUDOS (API)

Exibe página de programa de estudos, baseado nos filtros escolhidos pelo usuário (Banca e Órgão). O programa de estudos exibe uma árvore com assuntos e quantidade de questões disponíveis.

![app](https://maisqueonline.com.br/app1.png "app")

## Arquitetura

```
1) Back-end - API RESTful
  - PHP 7 
  - Slim Framework
  - ORM Eloquent
  - Migrations Phinx
2) Front-end
  - Vue 
  - Nuxt
  - Vuetify
3) DB
  - MySQL
```

## MER
![MER](https://maisqueonline.com.br/MER.png "MER")


## INSTALAÇÃO

- Clone do Workspace

`   git clone https://github.com/chrisostomo/programa-de-estudos.git`

- Dentro da Workspace clone o back-end e o front-end

`   git clone https://github.com/chrisostomo/api-programa-estudos.git`

`   git clone https://github.com/chrisostomo/app-programas-estudos.git`

- A estrutura de pastas deve ficar assim:
```
- programa-de-estudos
  - api-programa-estudos
  - app-programas-estudos
```

### EXECUTAR SERVIÇO

`docker-compose up`

### APÓS A INSTALAÇÃO DE TODOS OS CONTAINERS ACESSE:

`http://localhost:3000/`

```
...
    IMPORTANTE: O back-end roda na porta 8000.
...
```