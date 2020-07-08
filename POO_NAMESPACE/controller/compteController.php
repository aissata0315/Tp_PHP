<?php
require_once '../config/autoload.php';
use model\Compte;
if (!empty($_POST)){
    //var_dump($_POST); die();
    $compte = new Compte();
    if (isset($_POST['compteParticulier'])){
        $compte->setIdClient($_POST['id_client']);
        $compte->setIdEntreprise(null);
    } else {
        $compte->setIdEntreprise($_POST['id_entreprise']);
        $compte->setIdClient(null);
    }
    $compte->setTypeCompte($_POST['typeCompte']);
    $compte->setDateOuverture($_POST['dateOuverture']);
    $compte->setDateDeblocage($_POST['dateFin']);

    $enregistrement = $compte->creerCompte();


}
include '../view/Compte/compte.php';


