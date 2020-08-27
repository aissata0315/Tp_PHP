<?php
use Doctrine\ORM\Annotation ;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="personne")
 **/
    class Personne
    {   /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue**/
        private $id;
        /** @ORM\Column(type="string")**/
        private $nom;
        /** @ORM\Column(type="string")**/
        private $prenom;
        /** @ORM\Column(type="string")**/
        private $adresse;
        /** @ORM\Column(type="string")**/
        private $email;
        /** @ORM\Column(type="integer")**/
        private $telephone;
        /** @ORM\Column(type="integer")**/
        private $salaire;
        /** @ORM\Column(type="string")**/
        private $profession;
        /** @ORM\Column(type="string")**/
        private $nomEmployeur;
         /**
     * @ORM\OneToMany(targetEntity="Compte", fetch="EAGER",  mappedBy="idPersonne")
     * */
         private $comptes;

        public function __construct()
        {
            $this->comptes = new ArrayCollection();
        }
        public function getId()
        {
            return $this->id;
        }
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getNom()
        {
            return $this->nom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }
        public function getAdresse()
        {
            return $this->adresse;
        }
        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function getTelephone()
        {
            return $this->telephone;
        }
        public function setTelephone($telephone)
        {
            $this->telephone = $telephone;
        }
        public function getSalaire()
        {
            return $this->salaire;
        }
        public function setSalaire($salaire)
        {
            $this->salaire = $salaire;
        }
        public function getProfession()
        {
            return $this->profession;
        }
        public function setProfession($profession)
        {
            $this->profession = $profession;
        }
        public function getNomEmployeur()
        {
            return $this->nomEmployeur;
        }
        public function setNomEmployeur($nomEmployeur)
        {
            $this->nomEmployeur = $nomEmployeur;
        }

    }

?>