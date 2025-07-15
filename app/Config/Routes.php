<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Buku::index');
$routes->get('/create', 'Buku::create');
$routes->post('/store', 'Buku::store');
$routes->get('/edit/(:num)', 'Buku::edit/$1');
$routes->post('/update/(:num)', 'Buku::update/$1');
$routes->get('/delete/(:num)', 'Buku::delete/$1');

