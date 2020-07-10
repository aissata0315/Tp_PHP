<?php require dirname( __DIR__)."/header.php";  ?>
<article>
    <?php
    if (!empty($resultatEnregistrement)) {
        if($resultatEnregistrement == true){
            echo('Enregistrement reussi!');
        }
    }
    ?>
    <div class="form_choixTypeClient">
        <form class="hidden1"  method="post" enctype="multipart/form-data" >
            <h4>Selectionnez le Type de client</h4>
            <h4> <input type="radio" name="typeClient" value="Particulier" id="Particulier" class="typeClient"/> Client Particulier <br></h4>
            <h4><input type="radio" name="typeClient" value="Entreprise" id="Entreprise" class="typeClient"/> Client Entreprise <br> </h4>
    </div>
    </form>
    <form name="form3"  method="post" enctype="multipart/form-data" class="Entreprise hidden ClientEntreprise">
        <h3>Formulaire Ajout Client Entreprise</h3>
        <input type="text" name="nom"  placeholder="Nom Entreprise"> <br>
        <input type="number" name="registre" placeholder="Registre de commerce"> <br>
        <input type="text" name="ninea" placeholder="NINEA"> <br>
        <input type="submit" name="form3" class="button_valider" value="Creer le compte">
    </form>
    <form  method = "post" id="form2" class="Particulier hidden clientParticulier">
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
            <input type="number" value="0" name="salaire" placeholder="Salaire"> <br>
            <input type="text" value="0" name="profession" placeholder="Profession"> <br>
            <h4>Information de l'employeur:</h4>
            <input type="text" value="0" name="nomEmployeur" placeholder="Nom Employeur"> <br>
            <input type="text" value="0" name="raisonSocial" placeholder="Raison social" ><br>
        </div>
        <input type="submit" name="form2" class="button_valider" value="Creer le compte">
    </form>
</article>
<script type="text/javascript" src="././public/js/fichier.js"></script>
