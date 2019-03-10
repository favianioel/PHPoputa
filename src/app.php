<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();


$routes->add('hello', new Route('/hello/{name}', ['name' => 'World']));
$routes->add('bye'  , new Route('/bye'));
$routes->add('this-is-life', new Route('/this-is-life'));

return $routes;