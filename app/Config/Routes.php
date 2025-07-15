<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Buku::index');
$routes->get('/create', 'Buku::create');
$routes->post('/store', 'Buku::store');
$routes->get('/edit/(:segment)', 'Buku::edit/$1');
$routes->post('/update/(:segment)', 'Buku::update/$1');
$routes->get('/delete/(:segment)', 'Buku::delete/$1');
