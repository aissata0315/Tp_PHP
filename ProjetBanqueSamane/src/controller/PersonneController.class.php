<?php
use libs\system\Controller;
use src\model\PersonneRepository;

class PersonneController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /**
     * url pattern for this method
     * localhost/projectName/Personne/
     */

    public function index(){

        return $this->view->load("welcome/index");
    }

    public function add()
    {
        $tdb = new PersonneRepository();
        if (isset($_POST['valider'])) {
            extract($_POST);
            $data['ok'] = 0;
            if (!empty($nom) && !empty($prenom) && !empty($adresse) && !empty($email)) {

                $personneObject = new Personne();

                $personneObject->setNom(addslashes($nom));
                $personneObject->setPrenom(addslashes($prenom));
                $personneObject->setAdresse(addslashes($adresse));
                $personneObject->setEmail(addslashes($email));

                $ok = $tdb->addPersonne($personneObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("personne/add", $data);
        } else {
            return $this->view->load("personne/add");
        }
    }
        public function listePersonne()
        {
            $personnedb = new PersonneRepository();

           $data["listePersonne"] = $personnedb->getAll();
            return $this->view->load("welcome/index", $data);
        }


}
?>