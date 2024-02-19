<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('/peserta', 'Peserta::index');
$routes->get('/peserta/detail/(:any)', 'Peserta::detail/$1');
$routes->delete('/peserta/(:num)', 'Peserta::delete/$1');
$routes->get('/peserta/tambah', 'Peserta::tambah');
$routes->get('/peserta/edit/(:segment)', 'Peserta::edit/$1');
$routes->post('/peserta/update/(:segment)', 'Peserta::update/$1');
$routes->post('/peserta/save', 'Peserta::save');




