<?php

require_once '/home/aissata/TP/PHP/ORM/bootstrap.php';
include '/home/aissata/TP/PHP/ORM/src/entities/Compte.php';
include '/home/aissata/TP/PHP/ORM/src/entities/Personne.php';
if (!empty($_POST)){
$compte = new Compte();
$compte->setTypeCompte($_POST['typeCompte']);

$clientRepository = $entityManager->getRepository('Personne');
$personne = $clientRepository->find($_POST['idClient']);
$compte->setIdPersonne($personne);


$entityManager->persist($compte);
$entityManager->flush();
}


include '../view/Compte/compte.php';
