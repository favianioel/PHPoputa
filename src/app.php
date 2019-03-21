<?php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

$routes = new Routing\RouteCollection();

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'Controller\LeapYearController::index',
]));

$routes->add('home', new Routing\Route('/', [
    '_controller' => 'Controller\HomeController::index'
]));

return $routes;
