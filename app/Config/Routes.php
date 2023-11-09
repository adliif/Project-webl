<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/home/staff', 'Home::staff');
$routes->get('/home/edit/(:num)', 'Home::edit/$1');

$routes->get('/home/hapus/(:num)', 'Home::hapus/$1');
$routes->match(['get', 'post'], '/home/tambah', 'Home::tambah'); // Use 'match' for both GET and POST requests
$routes->match(['get', 'post'], '/home/update', 'Home::update'); // Use 'match' for both GET and POST requests




