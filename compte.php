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
        <div class="form_choixTypeClient">
        <form class="hidden1"  action="">
            <h4>Creer un compte pour:</h4>
           <h4> <input type="radio" name="typeClient" value="Particulier" id="Particulier" class="typeClient"/> Client Particulier <br></h4>
           <h4><input type="radio" name="typeClient" value="Entreprise" id="Entreprise" class="typeClient"/> Client Entreprise <br> </h4>
        </div>
        </form>
        <form id="form2" class="Particulier hidden clientParticulier">
            <h3>Type de compte</h3>
                <div class="radios">
                    <input type="radio" name="typeCompte" value="Compte Courant" id="compte_courant2" class="typeCompte"/> Compte Courant <br>
                    <input type="radio" name="typeCompte" value="Compte Epargne" id="compte_epargne2" class="typeCompte"/>  Compte Epargne <br>
                    <input type="radio" name="typeCompte" value="Compte Bloque" id="compte_bloque2" class="typeCompte"/> Compte Bloque<br>
                </div>
                <div class="input_commun ">
                    <input type="text" name="" placeholder="Numero du compte"> <br>
                    <label for="etat">Selectionnez l'id du proprietaire du compte:</label>
                        <select name="id_client" id="id_client">
                        <option value=" ">id_client</option>
                        <option value="001245875">001245875</option>
                        <option value="0012458454">0012458454</option>
                        <option value="002154897">002154897</option>
                        </select>
                </div>
                <div class="hidden compte_courant2">
                    <input type="number" name="" placeholder="Agios"> <br> 
                </div>
                <div class="hidden compte_bloque2">
                    <input type="number" name="" placeholder="Frais d'Ouverture"> <br>
                    <input type="date" name="" placeholder="Date de fin blocage"><br>
                </div>
                <div class="hidden compte_epargne2">
                    <input type="number" name="" placeholder="Frais d'Ouverture"> <br>
                    <label for="etat">Choix Etat Compte</label>
                        <select name="etat" id="etat">
                        <option value="Actif">Actif</option>
                        <option value="Bloque">Bloqué</option>
                        </select>
                </div>
                <input type="submit" class="button_valider" value="Creer le compte">
        </form>
        <form name="form3" class="Entreprise hidden ClientEntreprise">
            <h3>Type de compte</h3>
                <div class="radios">
                    <input type="radio" name="typeCompte" value="Compte Courant" id="compte_courant" class="typeCompte"/> Compte Courant <br>
                    <input type="radio" name="typeCompte" value="Compte Epargne" id="compte_epargne" class="typeCompte"/>  Compte Epargne <br>
                    <input type="radio" name="typeCompte" value="Compte Bloque" id="compte_bloque" class="typeCompte"/> Compte Bloque<br>
                </div>
                <div class="input_commun ">
                    <input type="text" name="" placeholder="Numero du compte"> <br>
 
                    <label for="etat">Selectionnez l'id du proprietaire du compte:</label>
                        <select name="id_entreprise" id="id_entreprise">
                        <option value=" "> id_entreprise</option>
                        <option value="001245875">001245875</option>
                        <option value="0012458454">0012458454</option>
                        <option value="002154897">002154897</option>
                        </select>
                </div>
                <div class="hidden compte_courant">
                    <input type="number" name="" placeholder="Agios"> <br> 
                </div>
                <div class="hidden compte_bloque">
                    <input type="number" name="" placeholder="Frais d'Ouverture"> <br>
                    <input type="date" name="" placeholder="Date de fin blocage"><br>
                </div>
                <div class="hidden compte_epargne">
                    <input type="number" name="" placeholder="Frais d'Ouverture"> <br>
                    <label for="etat">Choix Etat Compte</label>
                        <select name="etat" id="etat">
                        <option value="Etat Compte"> Etat Compte</option>
                        <option value="Actif">Actif</option>
                        <option value="Bloque">Bloqué</option>
                        </select>
                </div>
                <input type="submit" class="button_valider" value="Creer le compte">
        </form>
        <p style="color: red;" id="erreur"></p>



    </article>





    
    <script type="text/javascript" src="compte.js"></script>
</body>
</html>