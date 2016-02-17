<?php

namespace NightStandardEdition\Controller;


use Night\Component\Request\Request;
use Night\Component\Response\JSONResponse;

class TestJsonController
{
    public function testJsonResponseAction(Request $request)
    {
        $response = new JSONResponse();
        $response->setResponseStatus(200, 'OK');
        $response->setContent($request->server->getParam('SERVER_NAME'));
        return $response;
    }
}

