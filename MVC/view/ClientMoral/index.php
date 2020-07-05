<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././public/css/fichier.css">
    <title>Gestion clients</title>
</head>
<body>
    <header>
       <img src="././public/images/bplogo.png" alt="" id="logo">
       <h1>Banque Du Pleuple</h1>
       <img src="././public/images/TT.png" alt="" id="responsableCompte">  
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
   
        <div class="form_choixTypeClient">
        <form class="hidden1"  action="traitement.php" method="post" enctype="multipart/form-data" >
            <h4>Selectionnez le Type de client</h4>
           <h4> <input type="radio" name="typeClient" value="Particulier" id="Particulier" class="typeClient"/> Client Particulier <br></h4>
           <h4><input type="radio" name="typeClient" value="Entreprise" id="Entreprise" class="typeClient"/> Client Entreprise <br> </h4>
        </div>
        </form>
      
        <form name="form3" action="moralController" method="post" enctype="multipart/form-data" class="Entreprise hidden ClientEntreprise">
            <h3>Formulaire Ajout Client Entreprise</h3>
                    <input type="text" name="nom"  placeholder="Nom Entreprise"> <br>
                    <input type="number" name="registre" placeholder="Registre de commerce"> <br>
                    <input type="text" name="ninea" placeholder="NINEA"> <br>
                    <input type="submit" name="form3" class="button_valider" value="Creer le compte">
        </form>
        <p style="color: red;" id="erreur"></p>
    </article>
    
    <script type="text/javascript" src="././public/js/fichier.js"></script>
</body>
</html>
