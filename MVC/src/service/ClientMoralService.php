include './Dbaccess.php';
include '../../model/ClientMoral';
class ClientMoralService
{
    public __construct()
    {

    }
    $dbaccess=new Dbaccess();
    public function add(ClientMoral $clMoral)
    {
        $requete="INSERT INTO `client_entreprise`(`id_entreprise`, `nom`, `ninea`, `registre_commerce`) 
                                        VALUES (null,?,?,?)";
        
       
       try{
            $db=$dbaccess->getConnexion();
            $prepareStat=$db->prepare($requete);
            return $prepareStat->exec(array($clMoral->getNom(),));
       }
       catch{
           die("erreur")
       }
    }
}