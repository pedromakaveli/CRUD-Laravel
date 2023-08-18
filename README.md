<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sobre o projeto

O projeto foi feito para práticar os conceitos do CRUD diretamente no framework

## Como utilizar na sua máquina

### Dependências

- `php`
- `composer`
- [Banco de dados compatível](https://laravel.com/docs/10.x/database#introduction)

### 📝 Passo-a-passo:

1. Clone o repositório:
    ```bash
    git clone https://github.com/pedromakaveli/CRUD-Laravel.git
    cd CRUD-Laravel
    ```
2. Instale as dependências do `composer`:
    ```bash
    composer install
    ```
3. Gere uma nova chave de criptografia utilizando o Artisan:
    ```bash
    php artisan key:generate
    ```
4. Renomeie o arquivo `.env.example` para `.env` e edite-o com as credenciais do seu banco de dados:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel # Coloque o nome do banco de dados de sua preferência
    DB_USERNAME=root # Defina o usuário do seu banco de dados
    DB_PASSWORD= # Defina a senha do seu banco de dados
    ```
5. Ligue o servidor MySQL (ou compatível)
6. Faça a [migração](https://laravel.com/docs/10.x/migrations#introduction) do banco de dados **(AVISO: ESTE COMANDO APAGARÁ TODO O CONTEÚDO DO SEU BANCO DE DADOS DEFINIDO EM `DB_DATABASE`)**
    ```bash
    php artisan migrate:fresh
    ```
7. Inicie o servidor utilizando o Artisan:
    ```bash
    php artisan serve
    ```

## 📝 Entendendo a estrutura

- Migration: Irá conter as tabelas do nosso banco de dados
- Model: Irá tratar os dados que está sendo passado e fornecer metódos
- Controller: Irá conter as operações do CRUD e decidir a lógica da aplicação
- Router: Definirá as rotas da aplicação, métodos (post, get, put...) e chamará a função do controller responsável por lidar com aquela rota

### Comandos:

```
php artisan make:migration create_nome_table
```

```
php artisan migrate:fresh
```

```
php artisan make:controller NomeController
```

### Métodos úteis que a model oferece para utilizarmos no controller

- `find()`
- `update()` 
- `delete()`
- `create()`
- `where()`
- `save()`

## 📝 Controller tipo resource

Para a facilitação da nossa aplicação em crud o Laravel fornece o `-–resource` que quando passado na criação do nosso controller, cria um arquivo com as principais operações do crud.

### Comando:

```
php artisan make:controller –-resource
```

- `index()`: Exibe tudo
- `create()`: Cria novo conteúdo e insere no banco de dados
- `show()`: Exibe um conteúdo em específico pela `$id`
- `edit()`: Edita um conteúdo
- `update()`: Atualiza o novo conteúdo

### 🙏 Agradecimentos

- <img width="80px" valign="middle" src="https://avatars.githubusercontent.com/u/626206?v=4"> [@guihkx](https://github.com/guihkx)