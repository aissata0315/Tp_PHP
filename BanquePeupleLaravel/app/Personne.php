<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = array('nom', 'prenom', 'email', 'telephone');
    public static $rules = array('nom'=>'required | min:2',
                                 'prenom'=>'required | min:3',
                                  'email'=>'required | min:15',
                                  'telephone'=>'required | min:9',) ;


}
