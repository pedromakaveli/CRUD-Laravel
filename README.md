<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto

O projeto foi feito para práticar os conceitos do CRUD diretamente no framework

## 📝 Entendendo a estrutura

-Migration: Irá conter as tabelas do nosso banco de dados<br/>
-Model: Irá tratar os dados que está sendo passado e fornecer metódos<br/>
-Controller: Irá conter as operações do CRUD e decidir a lógica da aplicação<br/>
-Router: Definirá as rotas da aplicação, métodos(post,get,put ...) e chamará a função do controller responsável por lidar com aquela rota<br/>

<h2>Comandos:</h2>

<pre>php artisan make:migration create_nome_table</pre>
<pre>php artisan make:migration create_nome_table</pre>
<pre>php artisan migrate:fresh</pre>
<pre>php artisan make:controller NomeController</pre>

Métodos úteis que a model oferece para utilizarmos no controller

<ul>
    <li>find()</li>
    <li>update()</li>
    <li>delete()</li>
    <li>create()</li>
    <li>where()</li>
    <li>save()</li>
</ul>

## 📝 Controller tipo resource

Para a facilitação da nossa aplicação em crud o Laravel fornece o –resource que quando passado na criação do nosso controller, cria um arquivo com as principais operações do crud<br/>

<h2>Comando:</h2>

<pre>php artisan make:controller –resource</pre>
<ul>
    <li>index(): Exibe tudo</li>
    <li>create(): Cria novo conteúdo e insere no banco de dados</li>
    <li>show(): Exibe um conteúdo em específico pela $id</li>
    <li>edit(): Edita um conteúdo</li>
    <li>update(): Atualiza o novo conteúdo</li>
</ul>





