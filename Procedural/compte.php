<?php 
include 'Connexion.php';
  $query = "SELECT id_client from client_physique";
  $resultat= mysqli_query($idCon, $query) or die("erreur requete: ".mysqli_error($idCon));
  //var_dump($resultat);
  $query2 = "SELECT id_entreprise from client_entreprise";
  $resultat2= mysqli_query($idCon, $query2) or die("erreur requete: ".mysqli_error($idCon));
  //var_dump($resultat2);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Compte</title>
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
        <form class="hidden1"  method="post" action="creerCompte.php">
            <h4>Creer un compte pour:</h4>
           <h4> <input type="radio" name="typeClient" value="Particulier" id="Particulier" class="typeClient"/> Client Particulier <br></h4>
           <h4><input type="radio" name="typeClient" value="Entreprise" id="Entreprise" class="typeClient"/> Client Entreprise <br> </h4>
        </div>
        </form>
        <form id="form2" method="post" action="creerCompte.php" class="Particulier hidden clientParticulier">
            <h3>Type de compte</h3>
                <div class="radios">
                    <input type="radio" name="typeCompte" value="Compte Courant" id="compte_courant2" class="typeCompte"/> Compte Courant <br>
                    <input type="radio" name="typeCompte" value="Compte Epargne" id="compte_epargne2" class="typeCompte"/>  Compte Epargne <br>
                    <input type="radio" name="typeCompte" value="Compte Bloque" id="compte_bloque2" class="typeCompte"/> Compte Bloque<br>
                </div>
                <div class="input_commun ">
                    <input type="text" name="numeroCompte" placeholder="Numero du compte"> <br>
                    <label for="id_client">Selectionnez l'id du proprietaire du compte:</label>
                        <select name="id_client" id="id_client">
                        <?php
			                while ($options = mysqli_fetch_assoc($resultat))
			                {   
                                
		                ?>
			                <option name="id_client" value="<?php  echo $options['id_client']  ?>"> <?php  echo $options['id_client']  ?></option>
		                <?php 
		                 }
		                ?>
                        </select> <br>
                <label for="dateOuverture">Date d'Ouverture</label>
                <input type="date" name="dateOuverture" placeholder="Date Ouverture"><br>
                </div>
                <div class="hidden compte_courant2">
                
                </div>
                <div class="hidden compte_bloque2">
                <label for="dateFin">Date fin du blocage</label>
                    <input type="date" name="dateFin" value="1001-01-01" placeholder="Date de fin blocage"><br>
                </div>
                <div class="hidden compte_epargne2">
                </div>
                
                <input type="submit" name="form2" class="button_valider" value="Creer le compte">
        </form>
        <form name="form3" action="creerCompte.php" method="post" class="Entreprise hidden ClientEntreprise">
            <h3>Type de compte</h3>
                <div class="radios">
                    <input type="radio" name="typeCompte" value="Compte Courant" id="compte_courant" class="typeCompte"/> Compte Courant <br>
                    <input type="radio" name="typeCompte" value="Compte Epargne" id="compte_epargne" class="typeCompte"/>  Compte Epargne <br>
                    <input type="radio" name="typeCompte" value="Compte Bloque" id="compte_bloque" class="typeCompte"/> Compte Bloque<br>
                </div>
                <div class="input_commun ">
                    <input type="text" name="numeroCompte" placeholder="Numero du compte"> <br>
                    <label for="id_entreprise">Selectionnez l'id du proprietaire du compte:</label>
                        <select name="id_entreprise" id="id_entreprise">
                        <?php
			                while ($options2 = mysqli_fetch_assoc($resultat2))
			                {   
                                
		                ?>
			                <option name="id_entreprise" value="<?php  echo $options2['id_entreprise']  ?>"> <?php  echo $options2['id_entreprise']  ?></option>
		                <?php 
		                 }
		                ?>
                        </select> <br>
                <label for="dateOuverture">Date d'Ouverture</label>
                <input type="date" name="dateOuverture" placeholder="Date Ouverture"><br>
                </div>
                <div class="hidden compte_courant">
                
                </div>
                <div class="hidden compte_bloque">
                <label for="dateFin">Date fin du blocage</label>
                    <input type="date" name="dateFin" value="1001-01-01" placeholder="Date de fin blocage"><br>
                </div>
                <div class="hidden compte_epargne">
                </div>
                <input type="submit" name="form3" class="button_valider" value="Creer le compte">
        </form>
        <p style="color: red;" id="erreur"></p>
    </article>   
    <script type="text/javascript" src="compte.js"></script>
</body>
</html>