<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonneModel;

class Personne extends Controller
{
    public function create()
    {
        return view('personne/add');
    }

    public function addperson()
    {

        helper(['form', 'url']);

        $personne = new PersonneModel();

        $data = [


            'nom' => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'email' => $this->request->getVar('email'),
            'telephone'  => $this->request->getVar('telephone'),
        ];


        $save = $personne->insert($data);

       // return redirect()->to( base_url('public/Personne.php/create') );

    }
}