<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

// CRUD
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@salvar');