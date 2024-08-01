<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/registrasi', 'Auth::registrasi');


//manipulasi kontroller kelas menjadi class
$routes->get('class/', 'Kelas::index');
$routes->get('class/create', 'Kelas::create');
$routes->get('class/e/(:any)', 'Kelas::e/$1');
//delete
$routes->delete('/siswa/delete/(:num)', 'Siswa::delete/$1');
$routes->get('/siswa/delete/(:num)', 'siswa::redirect');
$routes->get('/kelas/delete/(:num)', 'kelas::redirect');
