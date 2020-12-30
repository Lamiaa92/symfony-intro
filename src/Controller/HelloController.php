<?php

namespace App\Controller;

use App\Taxes\Calculator;
use PhpParser\Builder\Function_;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    protected $logger;

    /**
     * @Route ("/hello/{name?World}", name="hello")
     */


    public function hello($name)
    {
        $tva = $this->calculator->calcul(100);

        dd($tva);

        return new Response("Hello $name");
    }
}
