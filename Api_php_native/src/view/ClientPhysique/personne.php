<?php require dirname( __DIR__)."/header.php";

?>
<style>
    input{
    margin-bottom: 5px;
    padding: 7px;
    display: block;
    border-radius: 5px;
    width: 900px;
    }
    h1{
        text-align : center;
    }
</style>
<h1>Formulaire Ajout Client Physique</h1>
<form action="" method="post">
<div class="Personne" >
    <input type="text" name="nom" placeholder="votre nom" required > <br>
    <input type="text" name="prenom" placeholder="votre prenom" required> <br>
    <input type="text" name="adresse" placeholder="votre Adresse" required> <br>
    <input type="email" name="email" placeholder="votre email" required> <br>
    <input type="integer" name="telephone" placeholder="votre numero" required> <br>
    <input type="integer" name="salaire" placeholder="votre salaire" required> <br>
    <input type="text" name="profession" placeholder="votre profession" required> <br>
    <input type="text" name="employeur" placeholder="votre employeur" required> <br>
</div>
    <input type="submit" name="saveClient" value='Enregistrer'>
</form>
    
</body>
</html>