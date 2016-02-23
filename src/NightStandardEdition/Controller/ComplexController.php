<?php

namespace NightStandardEdition\Controller;


use Night\Component\Controller\NightController;
use Night\Component\Request\Request;
use Night\Component\Response\Response;

class ComplexController extends NightController
{
    public function twigTest(Request $request)
    {
        $templating = $this->getTemplatingService();
        $templating->setTemplate('hello.twig');
        $templating->setVariable('name', 'Pablo');
        $templating->setVariable('surname', 'Puga');
        $html = $templating->render();

        $response = new Response();
        $response->setContentType('text\html');
        $response->setResponseStatus(200, 'OK');
        $response->setContent($html);

        return $response;
    }

    public function smartyTest(Request $request)
    {
        $templating = $this->getTemplatingService();
        $templating->setTemplate('hello.tpl');
        $templating->setVariable('name', 'Pablo');
        $templating->setVariable('surname', 'Puga');
        $html = $templating->render();

        $response = new Response();
        $response->setContentType('text\html');
        $response->setResponseStatus(200, 'OK');
        $response->setContent($html);

        return $response;
    }
}

