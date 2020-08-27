<?php
header('Content-Type: application/json');
require_once '../services/CompteService.php';
require_once  '../../bootstrap.php';
if( isset($_GET['numeroCompte'])) {

    //instancie ton service
    $service = new CompteService($entityManager);
    //ensuite tu demande a ton service de formater les données au format json
    $retour = $service->consulterSolde($_GET['numeroCompte']);
    //ensuite on dit au navigateur qu'on veux renvoyer du json

    echo $retour;
}