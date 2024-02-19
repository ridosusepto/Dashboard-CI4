<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('/peserta', 'Peserta::index');
$routes->get('/peserta/detail/(:any)', 'Peserta::detail/$1');
$routes->delete('peserta/(:num)', 'Peserta::delete/$1');

$routes->get('/peserta/tambah', 'Peserta::tambah');
// $routes->get('/index.php/peserta/tambah', 'Peserta::tambah');
$routes->post('peserta/save', 'Peserta::save');




