<?php
include '../model/Personne.php';
if (!empty($_POST)){
    //var_dump($_POST);
    //die();
    $personne = new Personne($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['email'], $_POST['telephone'], $_POST['salaire'], $_POST['profession'], $_POST['nomEmployeur'], $_POST['raisonSocial']);
    $resultatEnregistrement = $personne->enregistrer();

}
include '../view/ClientPhysique/personne.php';
