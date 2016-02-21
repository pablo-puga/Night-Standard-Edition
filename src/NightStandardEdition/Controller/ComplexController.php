<?php

namespace NightStandardEdition\Controller;


use Night\Component\Controller\NightController;
use Night\Component\Request\Request;
use Night\Component\Response\Response;

class ComplexController extends NightController
{
    public function twigTest(Request $request)
    {
        $this->templating->setTemplate('hello.twig');
        $this->templating->setVariable('name', 'Pablo');
        $this->templating->setVariable('surname', 'Puga');
        $html = $this->templating->render();

        $response = new Response();
        $response->setContentType('text\html');
        $response->setResponseStatus(200, 'OK');
        $response->setContent($html);

        return $response;
    }

    public function smartyTest(Request $request)
    {
        $this->templating->setTemplate('hello.tpl');
        $this->templating->setVariable('name', 'Pablo');
        $this->templating->setVariable('surname', 'Puga');
        $html = $this->templating->render();

        $response = new Response();
        $response->setContentType('text\html');
        $response->setResponseStatus(200, 'OK');
        $response->setContent($html);

        return $response;
    }
}

