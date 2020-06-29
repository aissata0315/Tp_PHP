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
        <form class="hidden1"  action="traitement.php" method="post" enctype="multipart/form-data" >
            <h4>Selectionnez le Type de client</h4>
           <h4> <input type="radio" name="typeClient" value="Particulier" id="Particulier" class="typeClient"/> Client Particulier <br></h4>
           <h4><input type="radio" name="typeClient" value="Entreprise" id="Entreprise" class="typeClient"/> Client Entreprise <br> </h4>
        </div>
        </form>
        <form action='traitement.php' method = "post" id="form2" class="Particulier hidden clientParticulier">
            <h3>Salarier ou Non Salarier</h3>
                <div class="radios">
                    <input type="radio" name="type_client" value="type client" id="salarier" class="type_client"/> Client Salarier <br>
                    <input type="radio" name="type_client" value="type client" id="non_salarier" class="type_client"/> Client non Salarier<br>   
                </div>
                <div class="hidden  non_salarier">
                    <h4>Formulaire Ajout Client Non Salarier</h4>
                    <input type="text" name="nom" placeholder="Nom Du client"> <br>
                    <input type="text" name="prenom" placeholder="Prenom du client"> <br>
                    <input type="email" name="email" placeholder="Email" onblur="verifMail(this)"> <br>
                    <input type="text" name="adresse" placeholder="Adresse"> <br>
                    <input type="number" name="telephone" placeholder="Telephone" onblur="verifTEL"> <br>
                </div>
                <div class="hidden  salarier">
                    <h4>Formulaire Ajout Client Salarier</h4>

                    <input type="text" name="nom" placeholder="Nom Du client"> <br>
                    <input type="text" name="prenom" placeholder="Prenom du client"> <br>
                    <input type="text" name="adresse" placeholder="Adresse"> <br>
                    <input type="email" name="email" placeholder="Email" onblur="verifMail(this)"> <br>
                    <input type="number" name="telephone" placeholder="Telephone" onblur="verifTEL"> <br>
                    <input type="number" name="salaire" placeholder="Salaire"> <br>
                    <input type="text" name="profession" placeholder="Profession"> <br>
                    <h4>Information de l'employeur:</h4>
                    <input type="text" name="nomEmployeur" placeholder="Nom Employeur"> <br>
                    <input type="text" name="raisonSocial" placeholder="Raison social" ><br>
                </div>
                <input type="submit" name="form2" class="button_valider" value="Creer le compte">
        </form>
        <form name="form3" action="traitement.php" method="post" enctype="multipart/form-data" class="Entreprise hidden ClientEntreprise">
            <h3>Formulaire Ajout Client Entreprise</h3>
                    <input type="text" name="nom"  placeholder="Nom Entreprise"> <br>
                    <input type="number" name="registre" placeholder="Registre de commerce"> <br>
                    <input type="text" name="ninea" placeholder="NINEA"> <br>
                    <input type="submit" name="form3" class="button_valider" value="Creer le compte">
        </form>
        <p style="color: red;" id="erreur"></p>
    </article>
    
    <script type="text/javascript" src="client.js"></script>
</body>
</html>
