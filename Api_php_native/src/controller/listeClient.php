<?php
// liste client
require_once '/home/aissata/TP/PHP/ORM/bootstrap.php';
include '/home/aissata/TP/PHP/ORM/src/entities/Personne.php';


$clientRepository = $entityManager->getRepository('Personne');
$personnes = $clientRepository->findAll();

foreach ($personnes as $personne) {
    echo sprintf("-%s\n", $personne->getPrenom());
}