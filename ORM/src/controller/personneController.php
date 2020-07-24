<?php

require_once '/home/aissata/TP/PHP/ORM/bootstrap.php';
include '/home/aissata/TP/PHP/ORM/src/entities/Personne.php';

$personne = new Personne();
$personne->setNom('Ba');
$personne->setPrenom('Aissata');
$personne->setAdresse('Parcelle');
$personne->setEmail('aissata.ba0903@gmail.com');
$personne->setTelephone(772956579);
$personne->setProfession('Devellopeur');
$personne->setSalaire(10);
$personne->setNomEmployeur('Orange');



$entityManager->persist($personne);
$entityManager->flush();
echo $personne->getId();


include '../view/ClientPhysique/personne.php';
