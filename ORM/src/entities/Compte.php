<?php
use Doctrine\ORM\Annotation ;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="compte")
 **/
class Compte
{   /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue**/
    private $id;
    /** @ORM\Column(type="string")**/
    private $typeCompte;
    // /** @ORM\Column(type="integer")**/
    // private $idEntreprise;
    /**
     * @ORM\ManyToOne(targetEntity="Personne", inversedBy="comptes")
     * @ORM\JoinColumn(name="idPersonne", referencedColumnName="id")
     */
    private $idPersonne;
    // /** @ORM\Column(type="date") nullable = true**/
    // private $dateOuverture;
    // /** @ORM\Column(type="date") nullable = true**/
    // private $dateDeblocage;

   
    public function __construct()
    {
        
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

   
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }

   
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

   
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;
    }

    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * 
     */
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;
    }

    // /**
    //  * @return mixed
    //  */
    // public function getDateOuverture()
    // {
    //     return $this->dateOuverture;
    // }

    // /**
    //  * @param mixed $dateOuverture
    //  */
    // public function setDateOuverture($dateOuverture)
    // {
    //     $this->dateOuverture = $dateOuverture;
    // }

    // /**
    //  * @return mixed
    //  */
    // public function getDateDeblocage()
    // {
    //     return $this->dateDeblocage;
    // }

    // /**
    //  * param mixed $dateDeblocage
    //  */
    // public function setDateDeblocage($dateDeblocage)
    // {
    //     $this->dateDeblocage = $dateDeblocage;
    // }

    

    

}