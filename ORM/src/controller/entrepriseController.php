<?php

require_once '/home/aissata/TP/PHP/ORM/bootstrap.php';
include '/home/aissata/TP/PHP/ORM/src/entities/Entreprise.php';
if (!empty($_POST)){
$entreprise = new Entreprise();
$entreprise->setNom($_POST['nom']);
$entreprise->setNinea($_POST['ninea']);
$entreprise->setRegistre($_POST['registre']);

$entityManager->persist($entreprise);
$entityManager->flush();
}


include '/home/aissata/TP/PHP/ORM/src/view/ClientEntreprise.php/entreprise.php';





