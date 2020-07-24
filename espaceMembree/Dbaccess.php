<?php
   try
   {
       $bdd = new PDO('mysql:host=localhost;dbname=BanquePopulaire;charset=utf8', 'aissata', 'aissata');
   }
   catch (Exception $e)
   {
           die('Erreur : ' . $e->getMessage());
   } 

?>