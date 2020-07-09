<?php

    $idCon = mysqli_connect('localhost','aissata', "aissata")or die("impossible de se connecter!");
    //choisir une bdd parmi les bdd du serveur de bdd
    mysqli_select_db($idCon, 'BanquePopulaire') or die("impossible de choisir une bbd");
?>