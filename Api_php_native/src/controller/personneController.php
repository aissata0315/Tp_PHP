<?php

require_once '/home/aissata/TP/PHP/ORM/bootstrap.php';
include '/home/aissata/TP/PHP/ORM/src/entities/Personne.php';
if (!empty($_POST)){

    $personne = new Personne();
    $personne->setNom($_POST['nom']);
    $personne->setPrenom($_POST['prenom']);
    $personne->setAdresse($_POST['adresse']);
    $personne->setEmail($_POST['email']);
    $personne->setTelephone($_POST['telephone']);
    $personne->setProfession($_POST['profession']);
    $personne->setSalaire($_POST['salaire']);
    $personne->setNomEmployeur($_POST['employeur']);
    

    $entityManager->persist($personne);
    $entityManager->flush();
    


}






















// $personne = new Personne();
// $personne->setNom('Ba');
// $personne->setPrenom('Aissata');
// $personne->setAdresse('Parcelle');
// $personne->setEmail('aissata.ba0903@gmail.com');
// $personne->setTelephone(772956579);
// $personne->setProfession('Devellopeur');
// $personne->setSalaire(10);
// $personne->setNomEmployeur('Orange');



// $entityManager->persist();
// $entityManager->flush();
// echo $personne->getId();


include '../view/ClientPhysique/personne.php';
