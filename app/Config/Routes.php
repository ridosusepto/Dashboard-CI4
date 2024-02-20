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

$routes->get('/course', 'Course::index');
$routes->get('/course/detail/(:any)', 'Course::detail/$1');
$routes->delete('/course/(:num)', 'Course::delete/$1');
$routes->get('/course/tambah', 'Course::tambah');
$routes->get('/course/edit/(:segment)', 'Course::edit/$1');
$routes->post('/course/update/(:segment)', 'Course::update/$1');
$routes->post('/course/save', 'Course::save');




