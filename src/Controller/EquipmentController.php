<?php

namespace App\Controller;

use App\Entity\Armor;
use App\Entity\Gloves;
use App\Entity\Helmet;
use App\Entity\ItemGrade;
use App\Entity\Shoes;
use App\Entity\SubWeapon;
use App\Form\ArmorFormType;
use App\Form\GlovesFormType;
use App\Form\HelmetFormType;
use App\Form\ItemGradeType;
use App\Form\SubWeaponFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/equipment", name="equipment.")
 */
class EquipmentController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('equipment/index.html.twig', [
            'controller_name' => 'EquipmentController',
        ]);
    }


    /**
     * @Route("/newGloves", name="newGloves")
     * @@param Request $request
     */
    public function newGloves(Request $request)
    {
        $gloves = new Gloves();
        $gloves->setName("Give me a name");
        $form = $this->createForm(GlovesFormType::class, $gloves);

        if ($this->formIsHandled($request, $form, $gloves)){
            return $this->redirectToRoute('equipment.index');
        }
        // default to
        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/newItemGrade", name="newItemGrade")
     * @@param Request $request
     */
    public function newItemGrade(Request $request)
    {
        $itemGrade = new ItemGrade();
        $itemGrade->setName("Give me a name");
        $form = $this->createForm(ItemGradeType::class, $itemGrade);
        if ($this->formIsHandled($request, $form, $itemGrade)){
            return $this->redirectToRoute('equipment.index');
        }
        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/newArmor", name="newArmor")
     * @@param Request $request
     */
    public function newArmor(Request $request)
    {
        $armor = new Armor();
        $armor->setName("Give me a name");
        $form = $this->createForm(ArmorFormType::class, $armor);
        if ($this->formIsHandled($request, $form, $armor)){
            return $this->redirectToRoute('equipment.index');
        }
        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/newSubWeapon", name="newSubWeapon")
     * @@param Request $request
     */
    public function newSubWeapon(Request $request)
    {
        $subWeapon = new SubWeapon();
        $subWeapon->setName("Give me a name");
        $form = $this->createForm(SubWeaponFormType::class, $subWeapon);
        if ($this->formIsHandled($request, $form, $subWeapon)){
            return $this->redirectToRoute('equipment.index');
        }
        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/newHelmet", name="newHelmet")
     * @@param Request $request
     */
    public function newHelmet(Request $request)
    {
        $helmet = new Helmet();
        $helmet->setName("Give me a name");
        $form = $this->createForm(HelmetFormType::class, $helmet);
        if ($this->formIsHandled($request, $form, $helmet)){
            return $this->redirectToRoute('equipment.index');
        }
        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/newHelmet", name="newHelmet")
     * @@param Request $request
     */
    public function newShoes(Request $request)
    {
        $shoes = new Shoes();
        $shoes->setName("Give me a name");
        $form = $this->createForm(Shoes::class, $shoes);
        if ($this->formIsHandled($request, $form, $shoes)){
            return $this->redirectToRoute('equipment.index');
        }
        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    // return true if form is valid and submitted and Item is persisted
    private function formIsHandled(Request $request, FormInterface $form, $item)
    {
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // read values back from form
            $item = $form->getData();
            // persist in database
            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();
            return true;
        }
        return false;
    }
}
