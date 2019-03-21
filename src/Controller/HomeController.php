<?php

namespace Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index()
    {
        return new Response('Hello, This is the Home page');
    }
}