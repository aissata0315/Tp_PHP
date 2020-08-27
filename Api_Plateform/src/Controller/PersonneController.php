<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneType;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personne", name="personne")
     *
     */
    public function addperson(Request $request)
    {
        $personne = new Personne();
        $form = $this->createForm(PersonneType::class, $personne);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $personne = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($personne);
            $entityManager->flush();

            return $this->redirectToRoute('success');
        }


        return $this->render('personne/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    public function success()
    {
        return $this->render('personne/success.html.twig');

    }
}
