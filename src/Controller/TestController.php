<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    /**
     * @Route("/test/{age}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */

    public function test(Request $request, $age)
    {

        return new Response("Vous avez $age ans !");
    }
}
