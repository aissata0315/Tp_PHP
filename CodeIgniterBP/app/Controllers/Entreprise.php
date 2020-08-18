<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EntrepriseModel;

class Entreprise extends Controller
{
    public function create()
    {
        return view('entreprise/add');
    }

    public function addentreprise()
    {

        helper(['form', 'url']);

        $entreprise = new EntrepriseModel();

        $data = [

            'nom' => $this->request->getVar('nom'),
            'ninea'  => $this->request->getVar('ninea'),
            'registre' => $this->request->getVar('registre'),
        ];

        $save = $entreprise->insert($data);

        //return redirect()->to( base_url('public/Entreprise.php/create') );

    }
}