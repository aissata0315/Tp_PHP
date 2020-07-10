<?php
namespace model;
use model\Dbaccess;
//require_once '../../config/autoload.php';

class Entreprise
{

    private $nom;
    private $ninea;
    private $registre;

    /**
     * entrepriseController constructor.
     * @param $nom
     * @param $ninea
     * @param $registre
     */
    public function __construct($nom, $ninea, $registre)
    {
        $this->nom = $nom;
        $this->ninea = $ninea;
        $this->registre = $registre;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * @param mixed $ninea
     */
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }

    /**
     * @return mixed
     */
    public function getRegistre()
    {
        return $this->registre;
    }

    /**
     * @param mixed $registre
     */
    public function setRegistre($registre)
    {
        $this->registre = $registre;
    }

    public function enregistrer()
    {
        $connexion = new Dbaccess();

        $bd = $connexion->getConnexion();

        $requete = $bd->prepare(
            "INSERT INTO `client_entreprise`(`id_entreprise`, `nom`, `ninea`, `registre_commerce`) VALUES (null,?,?,?)");

         $resultat = $requete->execute
        (array(
                $this->getNom(),
                $this->getNinea(),
                $this->getRegistre()
            )
        ) ;
         return $resultat;
    }



}