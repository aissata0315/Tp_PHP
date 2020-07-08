<?php
require_once '../config/autoload.php';
use model\Entreprise;


if(!empty($_POST)){
   $entreprise = new Entreprise($_POST['nom'], $_POST['ninea'], $_POST['registre']);
   $resultatEnregistrement = $entreprise->enregistrer($entreprise);
}
include '../view/clientEntreprise/entreprise.php';



