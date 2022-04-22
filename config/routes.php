<?php

$route->get('/', 'App\Controllers\HomeController@index');

$route->get('/empresas', 'App\Controllers\EmpresaController@listagem');
$route->get('/empresa/cadastrar', 'App\Controllers\EmpresaController@cadastrar');
$route->get('/empresa/{id:\d+}', 'App\Controllers\EmpresaController@mostrarItem');
$route->get('/empresa/{id:\d+}/editar', 'App\Controllers\EmpresaController@editar');

$route->post('/empresa/salvar', 'App\Controllers\EmpresaController@salvar');
$route->post('/empresa/{id:\d+}/atualizar', 'App\Controllers\EmpresaController@atualizar');
$route->get('/empresa/{id:\d+}/excluir', 'App\Controllers\EmpresaController@excluir');