<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class PersonneModel extends Model
{
    protected $table = 'personne';

    protected $allowedFields = ['nom', 'prenom', 'email', 'telephone'];

}