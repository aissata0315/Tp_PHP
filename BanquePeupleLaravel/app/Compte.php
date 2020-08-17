<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array('numero', 'typeCompte');
    public static $rules = array('numero'=>'required | min:2',
        'typeCompte'=>'required | min:3');
}
