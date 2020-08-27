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
    private $numero;
    /** @ORM\Column(type="string")**/
    private $typeCompte;
    /** @ORM\Column(type="integer")**/
    private $solde;

    /**
     * @ORM\ManyToOne(targetEntity="Personne", inversedBy="comptes")
     * @ORM\JoinColumn(name="idPersonne", referencedColumnName="id")
     */
    private $idPersonne;

   
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
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
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


    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;
    }



    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;
    }


    

}