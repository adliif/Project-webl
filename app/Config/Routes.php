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

$routes->get('/ownerpemesanan', 'OwnerPemesanan::index');
$routes->get('/ownertransaksi', 'OwnerTransaksi::index');
$routes->get('/ownerstaf', 'OwnerStaf::index');
$routes->get('/ownerstafedit', 'OwnerStaf::edit');
$routes->get('/ownerstaftambah', 'OwnerStaf::tambah');

$routes->get('/staf', 'Staf::index');
$routes->get('/pemesanan', 'Staf::pemesanan');
$routes->get('/transaksi', 'Staf::transaksi');