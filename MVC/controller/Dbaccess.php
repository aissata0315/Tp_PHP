<?php
class Dbaccess
{
    private $connexion;
    /**
     * Dbaccess constructor.
     */
    public function __construct()
    {
    }


    public function getConnexion()
    {
        // PDO 
        try
        {
            $connexion = new PDO('mysql:host=localhost;dbname=BanquePopulaire;charset=utf8', 'aissata', 'aissata');
            var_dump($connexion);
          
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        
        }
        return $this->$connexion;
    }
}