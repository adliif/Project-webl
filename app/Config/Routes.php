<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('/home', 'Home::home');
// =======================STAFF=====================================
$routes->get('/home/staff', 'Home::staff');
$routes->get('/home/edit/(:num)', 'Home::edit/$1');
$routes->get('/home/hapus/(:num)', 'Home::hapus/$1');
$routes->match(['get', 'post'], '/home/tambah', 'Home::tambah'); // Use 'match' for both GET and POST requests
$routes->match(['get', 'post'], '/home/update', 'Home::update'); // Use 'match' for both GET and POST requests

// =======================KAMAR=====================================
$routes->get('/kamar', 'Kamar::index');
$routes->post('/kamar/simpan', 'Kamar::simpan');
$routes->post('/kamar/hapus/(:segment)', 'Kamar::hapus/$1');
$routes->get('/kamar/edit/(:segment)', 'Kamar::edit/$1');
$routes->post('/kamar/update/(:segment)', 'Kamar::update/$1');

// ==========================PEMESANAN==================================
$routes->get('/pemesanan', 'Pemesanan::index');
$routes->post('/pemesanan/simpan', 'Pemesanan::simpan');
$routes->post('/pemesanan/hapus/(:segment)', 'Pemesanan::hapus/$1');
$routes->get('/pemesanan/edit/(:segment)', 'Pemesanan::edit/$1');
$routes->post('/pemesanan/update/(:segment)', 'Pemesanan::update/$1');
$routes->post('/pemesanan/acc/(:segment)', 'Pemesanan::acc/$1');





