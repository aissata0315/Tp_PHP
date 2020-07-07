<?php
include 'Dbaccess.php';

class Compte
{
    private $typeCompte;
    private $idEntreprise;
    private $idClient;
    private $dateOuverture;
    private $dateDeblocage;

    /**
     * Compte constructor.
     * @param $numCompte
     * @param $typeCompte
     * @param $idEntreprise
     * @param $idClient
     * @param $dateOuverture
     * @param $dateDeblocage
     */
    public function __construct($typeCompte = null, $idEntreprise = null, $idClient = null, $dateOuverture = null, $dateDeblocage = null)
    {
        $this->typeCompte = $typeCompte;
        $this->idEntreprise = $idEntreprise;
        $this->idClient = $idClient;
        $this->dateOuverture = $dateOuverture;
        $this->dateDeblocage = $dateDeblocage;
    }

    /**
     * @return mixed
     */
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    /**
     * @param mixed $typeCompte
     */
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }

    /**
     * @return mixed
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * @param mixed $idEntreprise
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getDateOuverture()
    {
        return $this->dateOuverture;
    }

    /**
     * @param mixed $dateOuverture
     */
    public function setDateOuverture($dateOuverture)
    {
        $this->dateOuverture = $dateOuverture;
    }

    /**
     * @return mixed
     */
    public function getDateDeblocage()
    {
        return $this->dateDeblocage;
    }

    /**
     * @param mixed $dateDeblocage
     */
    public function setDateDeblocage($dateDeblocage)
    {
        $this->dateDeblocage = $dateDeblocage;
    }

    public function creerCompte(){
        $connexion = new Dbaccess();
        $db = $connexion->getConnexion();

        $requeste = $db->prepare("INSERT INTO `comptes`(`num_compte`, `type_compte`, `id_entreprise`, `id_client_physique`, `date_ouverture`, `date_deblocage`) VALUES(null ,?,?,?,?,?)");

        $resultat = $requeste->execute(
            array(
                //$this->getNumCompte(),
                $this->getTypeCompte(),
                $this->getIdEntreprise(),
                $this->getIdClient(),
                $this->getDateOuverture(),
                $this->getDateDeblocage()
            )
        );

        return $resultat;

    }

}