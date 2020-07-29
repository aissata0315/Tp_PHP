<?php

    use Doctrine\ORM\Annotation as ORM;
    use Doctrine\Common\Collections\ArrayCollection;
    /**
     * @Entity @Table(name="personne")
     **/
    class Personne
    {
        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;
        /** @Column(type="string") **/
        private $nom;
        /** @Column(type="string") **/
        private $prenom;
        /** @Column(type="string") **/
        private $adresse;
        /** @Column(type="string") **/
        private $email;

        /**
         * One personne has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Compte", mappedBy="proprietaire")
         */
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
    }
?>