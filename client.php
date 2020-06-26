<?php 
//var_dump($_POST);
//var_dump(isset($_POST)); // verifier que la variable est defini

if(!empty($_POST)){
    
    

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
header('location: client.php?succes=ok');

} else {


  
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion clients</title>
</head>
<body>
    <header>
       <img src="images/bplogo.png" alt="" id="logo">
       <h1>Banque Du Pleuple</h1>
       <img src="images/TT.png" alt="" id="responsableCompte">  
    </header>
    <h5 id="TT">T.THIAM</h5>
    <nav>
        <ul>
            <li>Accueil</li>
            <li>Listes des clients</li>
            <li>Ajouter clients</li>
            <li>Virement</li>
            <li>Assistance</li>
        </ul>
    </nav>

    <article>
    <?php 
    if(isset($_GET['succes']) && $_GET['succes']=='ok'){
        $msg = "<h3 style='color: '>Enregistrement reussi</h3>";
        echo $msg;
    }


    ?>
        <div class="form_choixTypeClient">
        <form class="hidden1"  action="client.php" method="post" enctype="multipart/form-data" >
            <h4>Selectionnez le Type de client</h4>
           <h4> <input type="radio" name="typeClient" value="Particulier" id="Particulier" class="typeClient"/> Client Particulier <br></h4>
           <h4><input type="radio" name="typeClient" value="Entreprise" id="Entreprise" class="typeClient"/> Client Entreprise <br> </h4>
        </div>
        </form>
        <form action='client.php' method = "post" id="form2" class="Particulier hidden clientParticulier">
            <h3>Salarier ou Non Salarier</h3>
                <div class="radios">
                    <input type="radio" name="type_client" value="type client" id="salarier" class="type_client"/> Client Salarier <br>
                    <input type="radio" name="type_client" value="type client" id="non_salarier" class="type_client"/> Client non Salarier<br>
                    
                </div>
                <div class="hidden  non_salarier">
                    <h4>Formulaire Ajout Client Non Salarier</h4>
                    <input type="text" name="nom" placeholder="Nom Du client"> <br>
                    <input type="text" name="prenom" placeholder="Prenom du client"> <br>
                    <input type="text" name="adresse" placeholder="Adresse"> <br>
                    <input type="email" name="email" placeholder="Email" onblur="verifMail(this)"> <br>
                    <input type="number" name="telephone" placeholder="Telephone" onblur="verifTEL"> <br>
                </div>
                <div class="hidden  salarier">
                    <h4>Formulaire Ajout Client Salarier</h4>

                    <input type="text" name="" placeholder="Nom Du client"> <br>
                    <input type="text" name="" placeholder="Prenom du client"> <br>
                    <input type="text" name="" placeholder="Adresse"> <br>
                    <input type="number" name="" placeholder="CNI" onblur="verifCNI(this)"> <br>
                    <input type="email" name="" placeholder="Email" onblur="verifMail(this)"> <br>
                    <input type="number" name="" placeholder="Telephone" onblur="verifTEL"> <br>
                    <input type="number" name="" placeholder="Salaire"> <br>
                    <input type="text" name="" placeholder="Profession"> <br>
                    <h4>Information de l'employeur:</h4>
                    <input type="text" name="" placeholder="Nom Employeur"> <br>
                    <input type="text" name="" placeholder="Raison social" ><br>
                    <input type="text" name="" placeholder="Adresse employeur"><br>
                    <input type="number" name="" placeholder="CNI employeur"><br>
                </div>
                <input type="submit" class="button_valider" value="Creer le compte">
        </form>
        <form action="client.php" method="post" enctype="multipart/form-data" name="form3" class="Entreprise hidden ClientEntreprise">
            <h3>Formulaire Ajout Client Entreprise</h3>
                    <input type="text" name="nom"  placeholder="Nom Entreprise"> <br>
                    <input type="number" name="registre" placeholder="Registre de commerce"> <br>
                    <input type="text" name="ninea" placeholder="NINEA"> <br>
                    <input type="submit" class="button_valider" value="Creer le compte">

        </form>
        <p style="color: red;" id="erreur"></p>



    </article>
    
    <script type="text/javascript" src="client.js"></script>
</body>
</html>
<?php
  }
 ?>