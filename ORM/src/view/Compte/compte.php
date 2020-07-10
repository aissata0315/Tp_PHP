<?php require dirname( __DIR__)."/header.php";

?>

<article>
    <?php
    if (!empty($enregistrement)) {
        if($enregistrement == true){
            echo('Compte creer avec succes!');
        }
    }
    ?>
        <div class="form_choixTypeClient">
        <form class="hidden1"  method="post" >
            <h4>Creer un compte pour:</h4>
           <h4> <input type="radio" name="typeClient" value="Particulier" id="Particulier" class="typeClient"/> Client Particulier <br></h4>
           <h4><input type="radio" name="typeClient" value="Entreprise" id="Entreprise" class="typeClient"/> Client Entreprise <br> </h4>
        </div>
        </form>
        <form id="form2" method="post"  class="Particulier hidden clientParticulier">
            <h3>Type de compte</h3>
                <div class="radios">
                    <input type="radio" name="typeCompte" value="Compte Courant" id="compte_courant2" class="typeCompte"/> Compte Courant <br>
                    <input type="radio" name="typeCompte" value="Compte Epargne" id="compte_epargne2" class="typeCompte"/>  Compte Epargne <br>
                    <input type="radio" name="typeCompte" value="Compte Bloque" id="compte_bloque2" class="typeCompte"/> Compte Bloque<br>
                </div>
                <div class="input_commun ">
                    <!--<input type="text" name="numeroCompte" placeholder="Numero du compte"> <br !-->
                    <label for="id_client">Selectionnez l'id du proprietaire du compte:</label>
                        <select name="id_client" id="id_client">
                            <option value="21"> 21</option>
                            <option value="22"> 22</option>
                            <option value="24"> 24</option>
                            <option value="27"> 27</option>
                            <option value="28"> 28</option>

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

                <input type="submit" name="compteParticulier" class="button_valider" value="Creer le compte">
        </form>
        <form name="form3" method="post" class="Entreprise hidden ClientEntreprise">
            <h3>Type de compte</h3>
                <div class="radios">
                    <input type="radio" name="typeCompte" value="Compte Courant" id="compte_courant" class="typeCompte"/> Compte Courant <br>
                    <input type="radio" name="typeCompte" value="Compte Epargne" id="compte_epargne" class="typeCompte"/>  Compte Epargne <br>
                    <input type="radio" name="typeCompte" value="Compte Bloque" id="compte_bloque" class="typeCompte"/> Compte Bloque<br>
                </div>
                <div class="input_commun ">
                    <!-- <input type="text" name="numeroCompte" placeholder="Numero du compte"> <br!-->
                     <label for="id_entreprise">Selectionnez l'id du proprietaire du compte:</label>
                         <select name="id_entreprise" id="id_entreprise">
                             <option value="17"> 17</option>
                             <option value="18"> 18</option>
                             <option value="20"> 20</option>
                             <option value="21"> 21</option>
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
 <!--script type="text/javascript" src="../../public/js/compte.js"></script!-->
 <script type="text/javascript" src="././public/js/compte.js"></script>

