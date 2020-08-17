<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompteController extends Controller
{
    public function add(){

        return view('compte/add');
    }

    public function creerCompte(Request $request){
        DB::table('comptes')->insert(
            ['numero' => ($request->get('numero')),
            'typecompte' => ($request->get('type'))]);


    }
}
