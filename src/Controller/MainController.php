<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return new Response("<h1>welcome</h1>");

        /**
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
         **/
    }

    /**
     * @Route("/customer/{name?}", name="customer")
     * @param Request $request
     * @return Response
     */
    public function customer(Request $request){
        return new Response(dump($request)."<h1>Welcome</h1>");

    }
}
