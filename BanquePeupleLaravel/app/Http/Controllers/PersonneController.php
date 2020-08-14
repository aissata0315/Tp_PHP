<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonneController extends Controller
{

    public function add()
    {

        /*$id=DB::table('personnes')->insertGetId([
            'nom'=>'mballo',
            'prenom'=>'ousmane',
            'email'=>'ous@gfjef',
            'telephone'=>'7777867444'
        ]);*/
        return view('personne/add');
    }

    public function ajouterClient(Request $request){
        DB::table('personnes')->insert(
            ['nom' => ($request->get('nom')),
                'prenom' => ($request->get('prenom')),
                'email' => ($request->get('email')),
                'telephone' => ($request->get('telephone'))]);


    }
}
