<?php
include '../model/Entreprise.php';

if(!empty($_POST)){
   $entreprise = new Entreprise($_POST['nom'], $_POST['ninea'], $_POST['registre']);
   $resultatEnregistrement = $entreprise->enregistrer($entreprise);
}
include '../view/clientEntreprise/entreprise.php';



