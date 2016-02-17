<?php

namespace NightStandardEdition\Controller;


use Night\Component\Controller\NightController;

class NotFoundController extends NightController
{
    public function notFoundAction()
    {
        echo "This is not the route you are looking for";
    }
}

