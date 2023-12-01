<?php

use CodeIgniter\Router\RouteCollection;
use Config\Auth;
use App\Controllers\User;

/**
 * @var RouteCollection $routes
 */

// Routes User
$routes->get('/user', 'User::index');
$routes->get('/contact', 'User::contact');
$routes->get('/reservasi', 'User::reservasi');
$routes->get('/transaction', 'User::transaction');

$routes->get('/create', [User::class, 'create']);
$routes->post('/pemesanan', [User::class, 'store']);
$routes->put('/user/(:any)', [User::class, 'update']);
$routes->get('/user/(:any)/edit', [User::class, 'edit']);
$routes->delete('/user/(:any)', [User::class, 'destroy']);
$routes->match(['get', 'post'], 'sendEmail', 'User::sendEmail');

// Routes Owner
$routes->get('/owner', 'Owner::index', ['filter' => 'role:owner']);
$routes->get('/pemesanan', 'Owner::pemesanan', ['filter' => 'role:owner']);
$routes->get('/transaksi', 'Owner::transaksi', ['filter' => 'role:owner']);
$routes->get('/staf', 'Owner::staf', ['filter' => 'role:owner']);
$routes->get('/stafedit', 'Owner::edit', ['filter' => 'role:owner']);
$routes->get('/staftambah', 'Owner::tambah', ['filter' => 'role:owner']);

// Routes Staf


// Intro
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');

$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(Auth::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});
