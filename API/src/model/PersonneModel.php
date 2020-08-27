<?php
require_once '/home/aissata/TP/PHP/API/bootstrap.php';
require_once '../entities/Personne.php';


        $personne = new Personne();
        $personne->setNom('Ba');
        $personne->setPrenom('Aissata');
        $personne->setAdresse('Parcelle');
        $personne->setEmail('aissata.ba0903@gmail.com');
        $personne->setTelephone(772956579);
        $personne->setProfession('Devellopeur');
        $personne->setSalaire(10);
        $personne->setNomEmployeur('Orange');
        $entityManager->persist();
        $entityManager->flush();
        echo $personne->getId();
