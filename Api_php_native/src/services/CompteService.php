<?php


class CompteService
{

    private $entityManager;
    /**
     * Service constructor.
     */
    public function __construct($entityManager)
    {
       $this->entityManager = $entityManager;
    }

    public function consulterSolde($numeroCompte)
    {
        //appel doctrine pour charger le compte de la bd

        $repo = $this->entityManager->getRepository('Compte');
        $compte = $repo->findBy(['numero' => $numeroCompte]);
        $solde = $compte[0]->getSolde();
        $type = $compte[0]->getTypeCompte();

        return json_encode(['solde' => $solde, "name" => $type]);
    }
}