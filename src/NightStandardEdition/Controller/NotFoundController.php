<?php

namespace NightStandardEdition\Controller;


use Night\Component\Request\Request;

class NotFoundController
{
    public function notFoundAction(Request $request)
    {
        echo "This is not the route you are looking for";
    }
}

