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
<div >
    <input type="text" name="nom" placeholder="votre nom" required > <br>
    <input type="text" name="ninea" placeholder="votre ninea" required> <br>
    <input type="text" name="registre" placeholder="votre registre" required> <br>
</div>
    <input type="submit" name="saveEntreprise" value='Enregistrer'>
</form>
    
</body>
</html>