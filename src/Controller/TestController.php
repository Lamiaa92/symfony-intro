<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        dd("Ca fonctionne");
    }

    /**
     * @Route("/test/{age}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */

    public function test(Request $request, $age)
    {

        return new Response("Vous avez $age ans !");
    }


}
