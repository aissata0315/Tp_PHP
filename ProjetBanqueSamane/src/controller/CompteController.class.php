<?php
use libs\system\Controller;
use src\model\CompteRepository;

class CompteController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * url pattern for this method
     * localhost/projectName/Compte/
     */

    public function index(){

        return $this->view->load("compte/index");
    }

    public function add()
    {
        $tdb = new CompteRepository();
        if (isset($_POST['valider'])) {
            extract($_POST);
            $data['ok'] = 0;
            if (!empty($typeCompte) && !empty($propietaire)) {

                $compteObject = new Personne();

                $compteObject->setNom(addslashes($typeCompte));
                $compteObject->setPrenom(addslashes($propietaire));
               ;

                $ok = $tdb->addPersonne($compteObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("compte/add", $data);
        } else {
            return $this->view->load("compte/add");
        }
    }
    public function listeCompte()
    {
        $comptedb = new CompteRepository();

        $data["listeCompte"] = $comptedb->getAll();
        return $this->view->load("welcome/index", $data);
    }

}