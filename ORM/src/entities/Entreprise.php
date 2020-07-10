<?php
class Entreprise
{

    private $nom;
    private $ninea;
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