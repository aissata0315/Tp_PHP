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
        <form class="hidden1"  enctype="multipart/form-data" >
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
    <p style="color: red;" id="erreur"></p>
</article>

<script type="text/javascript" src="./public/js/fichier.js"></script>

