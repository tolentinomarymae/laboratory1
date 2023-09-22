<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'MainController::index');
$routes->get('edit/(:num)', 'MainController::edit/$1');
$routes->post('save', 'MainController::save');
$routes->get('delete/(:num)', 'MainController::delete/$1');
