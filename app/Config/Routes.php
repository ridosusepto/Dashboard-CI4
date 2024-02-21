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

$routes->get('/kategorikelas', 'Kategorikelas::index');
$routes->delete('/kategorikelas/(:num)', 'Kategorikelas::delete/$1');
$routes->get('/kategorikelas/tambah_kategori', 'Kategorikelas::tambah_kategori');
$routes->get('/kategorikelas/edit_kategori/(:segment)', 'Kategorikelas::edit_kategori/$1');
$routes->post('/kategorikelas/update_kategori/(:segment)', 'Kategorikelas::update_kategori/$1');
$routes->post('/kategorikelas/save_kategori', 'Kategorikelas::save_kategori');

$routes->get('/kategorikelas', 'Kategorikelas::index');
$routes->delete('/kelasdelete/(:num)', 'Kategorikelas::delete_kelas/$1');
$routes->get('/kategorikelas/tambah_kelas', 'Kategorikelas::tambah_kelas');
$routes->get('/kategorikelas/edit_kelas/(:segment)', 'Kategorikelas::edit_kelas/$1');
$routes->post('/kategorikelas/update_kelas/(:segment)', 'Kategorikelas::update_kelas/$1');
$routes->post('/kategorikelas/save_kelas', 'Kategorikelas::save_kelas');





