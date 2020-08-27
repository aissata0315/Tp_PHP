<?php

require_once '../../bootstrap.php';
include '../entities/Compte.php';
include '../entities/Personne.php';
if (!empty($_POST)){
$compte = new Compte();

$compte->setNumero($_POST['numero']);
$compte->setTypeCompte($_POST['typeCompte']);
$compte->setSolde($_POST['solde']);


$clientRepository = $entityManager->getRepository('Personne');
$personne = $clientRepository->find($_POST['idClient']);
$compte->setIdPersonne($personne);


$entityManager->persist($compte);
$entityManager->flush();
}


include '../view/Compte/compte.php';
