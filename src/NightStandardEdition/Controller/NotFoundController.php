<?php

namespace NightStandardEdition\Controller;


use Night\Component\Controller\NightController;
use Night\Component\Response\Response;

class NotFoundController extends NightController
{
    public function notFoundAction()
    {
        $twigTemplating = $this->getServicesContainer()->getService('twig-templating');
        $twigTemplating->setTemplate('notFound.twig');
        $html = $twigTemplating->render();

        $response = new Response();
        $response->setResponseStatus(404, 'Not Found');
        $response->setContent($html);
        return $response;
    }
}

