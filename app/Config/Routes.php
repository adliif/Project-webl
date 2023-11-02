<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/home', 'Home::home');

$routes->get('/login', 'Home::login');
$routes->get('/signIn', 'Home::signIn');
$routes->get('/signUp', 'Home::signUp');