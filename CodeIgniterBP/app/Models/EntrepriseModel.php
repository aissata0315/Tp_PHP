<?php


namespace App\Models;


use CodeIgniter\Model;

class EntrepriseModel extends Model
{
    protected $table = 'entreprise';

    protected $allowedFields = ['nom', 'ninea', 'registre'];

}