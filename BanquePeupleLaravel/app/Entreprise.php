<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = array('nom', 'ninea', 'registrer');
    public static $rules = array('nom'=>'required | min:2',
        'ninea'=>'required | min:3',
        'registre'=>'required | min:15');

}
