<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('FAQ', 'faqController::index');
$routes->get('Contact', 'contactController::index');