<?php
include 'Connexion.php';
    
    if(!empty($_POST['form2'])){
        var_dump($_POST);

        $requete = 
        " INSERT INTO comptes values
            (
                '{$_POST['numeroCompte']}',
                '{$_POST['typeCompte']}',
                null,
                '{$_POST['id_client']}',
                '{$_POST['dateOuverture']}',
                '{$_POST['dateFin']}'
            )";
        //excecusion de la requette dans la base
        mysqli_query($idCon, $requete) or die("erreur requete: ".mysqli_error($idCon));
        $msg = "<h3 style='color: '>Enregistrement reussi</h3>";
        echo $msg;
        header('location: compte.php?succes=ok');
    }
    if(!empty($_POST['form3'])){
        //var_dump($_POST);  
        //requete creer compte

        $requete2 = 
        " INSERT INTO comptes values
            (
                '{$_POST['numeroCompte']}',
                '{$_POST['typeCompte']}',
                '{$_POST['id_entreprise']}',
                null,
                '{$_POST['dateOuverture']}',
                '{$_POST['dateFin']}'
            )";
            var_dump($_POST);
    
        //excecusion de la requette dans la base
        mysqli_query($idCon, $requete2) or die("erreur requete: ".mysqli_error($idCon));
        $msg = "<h3 style='color: '>Enregistrement reussi</h3>";
        echo $msg;
        header('location: compte.php?succes=ok');

    
    }


    ?>