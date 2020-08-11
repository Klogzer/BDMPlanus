<?php

namespace App\Controller;

use App\Entity\Family;
use App\Form\FamilyFormType;
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
        //$family = $familyRepository->find(0);
        $familyID = $this->getUser()->getFamily();
        if (!is_null($familyID)) {
            $family = $familyRepository->find($familyID);

            return $this->render('family/family.html.twig', [
                'family' => $family,
            ]);
        }
        return new Response("family not found");
    }

    /**
     * @Route("/create", name="create")
     * @@param  Request $request
     */
    public function create(Request $request)
    {
        $family = new Family();
        $family->setName("Give me a name");


        $form = $this->createForm(FamilyFormType::class, $family);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            // read values back from form
            $family = $form->getData();
            // persist in database
            $this->getUser()->setFamily($family);
            $em = $this->getDoctrine()->getManager();
            $em->persist($family);
            $em->persist($this->getUser());
            $em->flush();
            return $this->redirectToRoute('family.index');

        }

        return $this->render('family/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{name?}", name="family")
     * @param Request $request
     * @return Response
     */
    public
    function family(Request $request)
    {
        $name = $request->get('name');

        return $this->render('home/family.html.twig', ['name' => $name]);

    }
}
