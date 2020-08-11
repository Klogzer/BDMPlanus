<?php

namespace App\Controller;

use App\Entity\Family;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/family", name="family.")
 */
class FamilyController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('family/index.html.twig', [
            'controller_name' => 'FamilyController',
        ]);
    }

    /**
     * @Route("/create", name="create")
     * @param Request $request
     */
    public function create(Request $request)
    {
        $family = new Family();
        $family->setName("name");


        // entity manager
        $em = $this->getDoctrine()->getManager();
        $em->persist($family);
        $em->flush();

        //
        return new Response("Family created");
    }

    /**
     * @Route("/{name?}", name="family")
     * @param Request $request
     * @return Response
     */
    public function family(Request $request)
    {
        $name = $request->get('name');

        return $this->render('home/family.html.twig', ['name' => $name]);

    }
}
