<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Compte;
use App\Entity\Entreprise;
use App\Entity\Personne;
use App\Form\CompteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class CompteController extends AbstractController
{
    /**
     * @Route("/compte", name="compte")
     */
    public function creercompte(Request $request)
    {
        $compte = new Compte();
        $form = $this->createFormBuilder($compte)->getForm();
        $form->add('numero', TextType::class);
        $form->add('typeCompte', ChoiceType::class, [
            'choices' => [
                'choisir le type de compte' => 'choisir le type de compte',
                'Courant' => 'CC',
                'Epargne' => 'CE',
                'Bloqué' => 'CB',
            ],

        ]);
        $form->add('date', DateType::class);
        $personnes = $this->getDoctrine()->getRepository(Personne::class)->findAll();
        $choices = array();
        foreach ($personnes as $personne) {
            $choices[$personne->getPrenom()] = $personne->getId();
        }
        $form->add('idPersonne', ChoiceType::class, [

                'choices' => $choices,
                'mapped' => false
            ]
        );

        /*$entreprises = $this->getDoctrine()->getRepository(Entreprise::class)->findAll();
        $choices = array();

        foreach ($entreprises as $entreprise) {
            $choices[$entreprise->getNom()] = $entreprise->getId();
        }
        $form->add('idEntreprise', ChoiceType::class, [
                'choices' => $choices,
                'mapped' => false
            ]
        );*/
        $form->add('Enregistrer', SubmitType::class, ['label' => "Creer Compte"]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $compte = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $idpersonne = $request->request->all()['form']['idPersonne'];
            $personnechoisie = $this->getDoctrine()->getRepository(Personne::class)->find($idpersonne);
            $compte->setIdPersonne($personnechoisie);
            $entityManager->persist($compte);
            $entityManager->flush();
            return $this->redirectToRoute('success');

        }
        return $this->render('compte/add.html.twig', [
            'formulaire' => $form->createView(),
        ]);
    }


    public function listerCompte()
    {


        $comptes = $this->getDoctrine()->getRepository(Compte::class)->findAll();

        return $this->render('compte/liste.html.twig', array("comptes" => $comptes)
        );
    }


    public function modification(Request $request, $identifiant)
    {
        //var_dump($identifiant);
        $compte = $this->getDoctrine()->getRepository(Compte::class)->find($identifiant);
        $form = $this->createFormBuilder($compte);
        $form = $form->getForm();
        $form->add('numero', TextType::class);
        $form->add('typeCompte', ChoiceType::class, [
            'choices' => [
                'choisir le type de compte' => 'choisir le type de compte',
                'Courant' => 'CC',
                'Epargne' => 'CE',
                'Bloqué' => 'CB',
            ],
        ]);
        $form->add('date', DateType::class);
        $personnes = $this->getDoctrine()->getRepository(Personne::class)->findAll();
        $choices = array();
        foreach ($personnes as $personne) {
            $choices[$personne->getPrenom()] = $personne->getId();
        }
        $form->add('idPersonne', ChoiceType::class, [

                'choices' => $choices,
                'mapped' => false
            ]
        );
        $form->add('Enregistrer', SubmitType::class, ['label' => "Creer Compte"]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $compte = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $idpersonne = $request->request->all()['form']['idPersonne'];
            $personnechoisie = $this->getDoctrine()->getRepository(Personne::class)->find($idpersonne);
            $compte->setIdPersonne($personnechoisie);
            $entityManager->persist($compte);
            $entityManager->flush();
            return $this->redirectToRoute('listerCompte');

        }
        return $this->render('compte/add.html.twig', [
            'formulaire' => $form->createView(),
        ]);

    }

    public function supprimer($identifiant)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $compte = $entityManager->getRepository(Compte::class)->find($identifiant);
        $entityManager->remove($compte);
        $entityManager->flush();
        return $this->redirectToRoute('listerCompte');

    }
}
