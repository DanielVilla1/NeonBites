<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/features', 'Home::features');
$routes->get('/menu', 'Home::menu');
$routes->get('/contact', 'Home::contact');
$routes->get('/get-started', 'Home::getStarted');
