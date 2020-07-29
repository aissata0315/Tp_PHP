<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model;

use libs\system\Model;

class CompteRepository extends Model
{

    /**
     * Methods with DQL (Doctrine Query Language)
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getCompte($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Compte')->find(array('id' => $id));
        }
    }

    public function addCompte($compte)
    {
        if($this->db != null)
        {
            $this->db->persist($compte);
            $this->db->flush();

            return $compte->getId();
        }
    }

    public function getAll()
    {
        return $this->db->getRepository("Compte")->findAll();
    }
}