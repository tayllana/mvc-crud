<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

// CRUD
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@insert');

$router->get('/usuario/{id}/editar', 'UsuariosController@editar');
$router->post('/usuario/{id}/editar', 'UsuariosController@update');

$router->get('/usuario/{id}/excluir', 'UsuariosController@delete');