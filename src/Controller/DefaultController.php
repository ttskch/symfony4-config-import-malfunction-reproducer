<?php

namespace App\Controller;

use App\Service;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(Service $service)
    {
        return new Response($service->param);
    }
}
