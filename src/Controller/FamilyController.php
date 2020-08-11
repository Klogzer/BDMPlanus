<?php

namespace App\Controller;

use App\Entity\Family;
use App\Repository\FamilyRepository;
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
     * @param FamilyRepository $familyRepository
     * @return Response
     */
    public function index(FamilyRepository $familyRepository)
    {
        $family = $familyRepository->find(1);

        return $this->render('family/family.html.twig', [
            'family' => $family,
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
