<?php 
include 'Connexion.php';
//var_dump($_POST);
//var_dump(isset($_POST)); // verifier que la variable est defini
if(!empty($_POST['form3'])){  

    //request insertion client entreprise
    $requete2 = 
    "  INSERT INTO client_entreprise VALUES
    (    NULL,
        '{$_POST['nom']}',
        '{$_POST['registre']}',
        '{$_POST['ninea']}'
    )";
    var_dump($_POST);
    
    //excecusion de la requette dans la base
    mysqli_query($idCon, $requete2) or die("erreur requete: ".mysqli_error($idCon));
    $msg = "<h3 style='color: '>Enregistrement reussi</h3>";
    echo $msg;
    header('location: client.php?succes=ok');
}

if(!empty($_POST['form2'])){  
    
    //request insertion client physique
    $requete3 = 
    "  INSERT INTO client_physique VALUES
    (  
        NULL,
        '{$_POST['nom']}',
        '{$_POST['prenom']}',
        '{$_POST['adresse']}',
        '{$_POST['email']}',
        '{$_POST['telephone']}',
        '{$_POST['salaire']}',
        '{$_POST['profession']}',
        '{$_POST['nomEmployeur']}',
        '{$_POST['raisonSocial']}'
        
    )";
    var_dump($_POST) ; 
    
    //excecusion de la requette dans la base
    mysqli_query($idCon, $requete3) or die("erreur requete: ".mysqli_error($idCon));
    $msg = "<h3 style='color: '>Enregistrement reussi</h3>";
    echo $msg;
    header('location: client.php?succes=ok');

}
?>

