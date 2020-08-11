<?php

namespace App\Controller;

use App\Repository\FamilyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
