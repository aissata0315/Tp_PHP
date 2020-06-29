<?php 
//var_dump($_POST);
//var_dump(isset($_POST)); // verifier que la variable est defini
if(!empty($_POST['form3'])){  

    $idCon = mysqli_connect('localhost','aissata', "aissata")or die("impossible de se connecter!");
    //choisir une bdd parmi les bdd du serveur de bdd
    mysqli_select_db($idCon, 'BanquePopulaire') or die("impossible de choisir une bbd");
    
    
    //request insertion client entreprise
    $requeste2 = 
    "  INSERT INTO client_entreprise VALUES
    (    NULL,
        '{$_POST['nom']}',
        '{$_POST['registre']}',
        '{$_POST['ninea']}'
    )";
    var_dump($_POST);
    
    //excecusion de la requette dans la base
    mysqli_query($idCon, $requeste2) or die("erreur requete: ".mysqli_error($idCon));
    $msg = "<h3 style='color: '>Enregistrement reussi</h3>";
    echo $msg;
    //header('location: client.php?succes=ok');
}

if(!empty($_POST['form2'])){  

    $idCon = mysqli_connect('localhost','aissata', "aissata")or die("impossible de se connecter!");
    //choisir une bdd parmi les bdd du serveur de bdd
    mysqli_select_db($idCon, 'BanquePopulaire') or die("impossible de choisir une bbd");
    
    
    //request insertion client physique
    $requeste3 = 
    "  INSERT INTO client_physique VALUES
    (  
        NULL,
        '{$_POST['nom']}',
        '{$_POST['prenom']}',
        '{$_POST['adresse']}'
        '',
        '{$_POST['email']}',
        '{$_POST['telephone']}',
        '{$_POST['salaire']}',
        '{$_POST['profession']}',
        '{$_POST['nomEmployeur']}',
        '{$_POST['raisonSocial']}'
        
    )";
    var_dump($_POST);
    
    //excecusion de la requette dans la base
    mysqli_query($idCon, $requeste3) or die("erreur requete: ".mysqli_error($idCon));
    $msg = "<h3 style='color: '>Enregistrement reussi</h3>";
    echo $msg;

}
?>