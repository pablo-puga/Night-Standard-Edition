<?php

namespace NightStandardEdition\Controller;


use Night\Component\Request\Exception\InvalidRequestParam;
use Night\Component\Request\Request;
use Night\Component\Response\JSONResponse;

class TestJsonController
{
    public function testJsonResponseAction(Request $request)
    {
        $response = new JSONResponse();
        $response->setResponseStatus(200, 'OK');
        try {
            $request->get->getParam('jojojo');
            $response->setContent(['prueba' => get_class()]);
        } catch (InvalidRequestParam $e) {
            $response->setContent(['InvalidRequestParam' => $e->getMessage()]);
        }
        return $response;
    }
}

