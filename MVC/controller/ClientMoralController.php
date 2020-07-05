<?php
include './Dbaccess.php';
echo('$a');
class ClientMoralController
{   
    private $a= 0 ; 
    

    /**
     * ClientMoralController constructor.
     */
    public function __construct()
    {
        

    } 
    public function addClientmoral()
    {        
        
        if(!empty($_POST)){ 

            $clientMoral = new ClientMoral();
            
            $seConnecter->getConnexion();

        $requete = $seConnecter->prepare("INSERT INTO `client_entreprise`(`id_entreprise`, `nom`, `ninea`, `registre_commerce`) 
        VALUES (null,?,?,?)");
        var_dump($seConnecter);
        
        $requete->execute
        (array(
             $_POST['nom'],
            $_POST['ninea'], 
            $_POST['registre']
             )
         ) ;
        } 
    }
}
