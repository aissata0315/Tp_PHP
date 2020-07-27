<?php
use Doctrine\ORM\Annotation ;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="entreprise")
 **/
class Entreprise
{   
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue**/
    private $id;
    /** @ORM\Column(type="string")**/
    private $nom;
     /** @ORM\Column(type="string")**/
    private $ninea;
    /** @ORM\Column(type="string")**/
    private $registre;

    
    public function __construct()
    {
       
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


}