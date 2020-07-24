<?php

require_once '/home/aissata/TP/PHP/ORM/bootstrap.php';
include '/home/aissata/TP/PHP/ORM/src/entities/Compte.php';

$compte = new Compte();
$compte->setTypeCompte('Bloque');
//$compte->setIdPersonne();
//$compte->setDateOuverture(0);
//$compte->setDateDeblocage(0);



$entityManager->persist($compte);
$entityManager->flush();



include '../view/Compte/compte.php';
