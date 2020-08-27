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

}

?>