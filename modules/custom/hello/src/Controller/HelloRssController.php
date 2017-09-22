<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class HelloRssController extends ControllerBase
{
    public function content()
    {
        $response = new Response();
        $response->headers->set("Content-Type", 'application/json');
        $response->setContent(json_encode(array(1, 2, 3)));
       // kint($response);
        return $response;

    }

}