<?php

namespace App\Controller;

use App\Entity\Character;
use App\Form\CharacterFormType;
use App\Repository\CharacterRepository;
use App\Repository\FamilyRepository;
use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/character", name="character.")
 */
class CharacterController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param FamilyRepository $familyRepository
     * @return Response
     */
    public function index(FamilyRepository $familyRepository)
    {

        $familyID = $this->getUser()->getFamily();
        if (!is_null($familyID)) {
            $family = $familyRepository->find($familyID);

            return $this->render('character/index.html.twig', [
                'characters' => $family->getCharacters(),
            ]);
        }
        return new Response("family not found");
    }

    /**
     * @Route("/create", name="create")
     * @@param Request $request
     */
    public function create(Request $request)
    {
        $character = new Character();
        $character->setName("Give me a name");


        $form = $this->createForm(CharacterFormType::class, $character);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // read values back from form
            $character = $form->getData();

            // get family to update
            $family = $this->getUser()->getFamily();
            // relation
            $family->addCharacter($character);
            $character->setFamily($family);
            // persist in DB
            $em = $this->getDoctrine()->getManager();
            $em->persist($family);
            $em->persist($character);
            $em->flush();
            return $this->redirectToRoute('character.index');

        }

        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/{name}", name="edit")
     * @@param Request $request
     * @@param $name
     * @@param CharacterRepository $characterRepository
     * @return Response
     */
    public function edit(Request $request, $name, CharacterRepository $characterRepository)
    {
        $character = $characterRepository->findOneBy(['family' => $this->getUser()->getFamily(), 'name' => $name]);
        $form = $this->createForm(CharacterFormType::class, $character);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // read values back from form
            $character = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($character);
            $em->flush();
            return $this->redirectToRoute('character.index');
        }
        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
