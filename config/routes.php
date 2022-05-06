<?php

use App\Middleware\AuthMiddleware;

$route->get('/login', 'App\Controllers\LoginController@index');
$route->post('/login', 'App\Controllers\LoginController@login');
$route->get('/logout', 'App\Controllers\LoginController@logout');

$route
    ->group([
        'namespace' => 'App\Controllers', 
        'middlewares' => [AuthMiddleware::class]
    ], function($route) {

        $route->get('/', '\HomeController@index');
        #empresas páginas
        $route->get('/empresas', '\EmpresaController@listagem');
        $route->get('/empresa/cadastrar', '\EmpresaController@cadastrar');
        $route->get('/empresa/{id:\d+}', '\EmpresaController@mostrarItem');
        $route->get('/empresa/{id:\d+}/editar', '\EmpresaController@editar');
        #empresas funções salvar, atualizar e excluir
        $route->post('/empresa/salvar', '\EmpresaController@salvar');
        $route->post('/empresa/{id:\d+}/atualizar', '\EmpresaController@atualizar');
        $route->get('/empresa/{id:\d+}/excluir', '\EmpresaController@excluir');

        #colaboradores páginas
        $route->get('/colaboradores', '\ColaboradorController@listagem');
        $route->get('/colaborador/cadastrar', '\ColaboradorController@cadastrar');
        $route->get('/colaborador/{id:\d+}', '\ColaboradorController@mostrarItem');
        $route->get('/colaborador/{id:\d+}/editar', '\ColaboradorController@editar');
        #colaboradores funções salvar, atualizar e excluir
        $route->post('/colaborador/salvar', '\ColaboradorController@salvar');
        $route->post('/colaborador/{id:\d+}/atualizar', '\ColaboradorController@atualizar');
        $route->get('/colaborador/{id:\d+}/excluir', '\ColaboradorController@excluir');

        #usuários páginas
        $route->get('/usuarios', '\UsuarioController@listagem');
        $route->get('/usuario/cadastrar', '\UsuarioController@cadastrar');
        $route->get('/usuario/{id:\d+}', '\UsuarioController@mostrarItem');
        $route->get('/usuario/{id:\d+}/editar', '\UsuarioController@editar');
        #usuários funções salvar, atualizar e excluir
        $route->post('/usuario/salvar', '\UsuarioController@salvar');
        $route->post('/usuario/{id:\d+}/atualizar', '\UsuarioController@atualizar');
        $route->get('/usuario/{id:\d+}/excluir', '\UsuarioController@excluir');

        #fornecedores páginas
        $route->get('/fornecedores', '\FornecedorController@listagem');
        $route->get('/fornecedor/cadastrar', '\FornecedorController@cadastrar');
        $route->get('/fornecedor/{id:\d+}', '\FornecedorController@mostrarItem');
        $route->get('/fornecedor/{id:\d+}/editar', '\FornecedorController@editar');
        #fornecedores funções salvar, atualizar e excluir
        $route->post('/fornecedor/salvar', '\FornecedorController@salvar');
        $route->post('/fornecedor/{id:\d+}/atualizar', '\FornecedorController@atualizar');
        $route->get('/fornecedor/{id:\d+}/excluir', '\FornecedorController@excluir');

    });