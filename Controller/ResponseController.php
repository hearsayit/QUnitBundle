<?php

/*
 * Copyright 2011 Hearsay.
 */

namespace Hearsay\QUnitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller providing actions which generate arbitrary responses.
 * @author Kevin Montag <kevin@hearsay.it>
 */
class ResponseController extends Controller
{
    /**
     * Action to return a blank response with a particular code.
     * @param integer $code The response code.
     * @return Response The response.
     */
    public function responseAction($code)
    {
        return new Response('', $code);
    }
}
