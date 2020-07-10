<?php
namespace model;
use model\Dbaccess;
//require_once '../../config/autoload.php';
class Personne
{
    private $nom;
    private $prenom;
    private $adresse;
    private $email;
    private $telephone;
    private $salaire;
    private $profession;
    private $nomEmployeur;
    private $raisonSocialEmployeur;

    /**
     * Personne constructor.
     * @param $nom
     * @param $prenom
     * @param $adresse
     * @param $email
     * @param $telephone
     * @param $salaire
     * @param $profession
     * @param $nomEmployeur
     * @param $raisonSocialEmployeur
     */
    public function __construct($nom, $prenom, $adresse, $email, $telephone, $salaire, $profession, $nomEmployeur, $raisonSocialEmployeur)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
        $this->profession = $profession;
        $this->nomEmployeur = $nomEmployeur;
        $this->raisonSocialEmployeur = $raisonSocialEmployeur;
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getNomEmployeur()
    {
        return $this->nomEmployeur;
    }

    /**
     * @param mixed $nomEmployeur
     */
    public function setNomEmployeur($nomEmployeur)
    {
        $this->nomEmployeur = $nomEmployeur;
    }

    /**
     * @return mixed
     */
    public function getRaisonSocialEmployeur()
    {
        return $this->raisonSocialEmployeur;
    }

    /**
     * @param mixed $raisonSocialEmployeur
     */
    public function setRaisonSocialEmployeur($raisonSocialEmployeur)
    {
        $this->raisonSocialEmployeur = $raisonSocialEmployeur;
    }


    public function enregistrer()
    {
        $connexion = new Dbaccess();

        $bd = $connexion->getConnexion();

        $requete = $bd->prepare(
            "INSERT INTO `client_physique`(`id_client`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `salaire`, `profession`, `nom_employeur`, `raison_social`) VALUES (null, ?,?,?,?,?,?,?,?,?)");

        $resultat = $requete->execute
        (array(
                $this->getNom(),
                $this->getPrenom(),
                $this->getAdresse(),
                $this->getEmail(),
                $this->getTelephone(),
                $this->getSalaire(),
                $this->getProfession(),
                $this->getNomEmployeur(),
                $this->getRaisonSocialEmployeur()
            )
        ) ;
        return $resultat;
    }

}