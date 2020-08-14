<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{

    public function add()
    {
        return view('entreprise/add');
    }
    public function moral(Request $request){
        DB::table('entreprises')->insert(
            ['nom' => ($request->get('nom')),
                'ninea' => ($request->get('ninea')),
                'registre' => ($request->get('registre'))]);

        return view('entreprise/add');
    }
}
