<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@login');
$router->post('/login', 'LoginController@actionLogin');
$router->get('/logout', 'LoginController@logout');
