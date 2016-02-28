<?php

namespace NightStandardEdition\Controller;


use Night\Component\Controller\NightController;
use Night\Component\Response\Response;

class HomeController extends NightController
{
    public function homeAction()
    {
        $templating = $this->getServicesContainer()->getService('smarty-templating');
        $templating->setTemplate('home.tpl');
        $html = $templating->render();

        $response = new Response();
        $response->setContentType('text\html');
        $response->setResponseStatus(200, 'OK');
        $response->setContent($html);

        return $response;
    }
}

