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
    <input type="text" name="typeCompte" placeholder="Type de compte" required > <br>
    <label for="nom_personne">Selectionnez le proprietaire du compte:</label>
    <select name="idClient" id="idClient">
    <?php

        $clientRepository = $entityManager->getRepository('Personne');
        $personnes = $clientRepository->findAll();

        foreach ($personnes as $personne) {
        
  ?>
    <option value=" <?php echo sprintf("-%s\n", $personne->getId()); ?>"><?php echo sprintf("-%s\n", $personne->getId()); ?> </option>
    <?php  }   ?>                      
    </select> <br>

</div>
    <input type="submit" name="saveCompte" value='Enregistrer'>
</form>
    
</body>
</html>