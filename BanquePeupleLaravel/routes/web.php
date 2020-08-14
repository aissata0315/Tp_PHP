<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','AccueilController@index');
Route::get('/addperson','PersonneController@add');
Route::post('/ajout','PersonneController@ajouterClient');
Route::get('/addentreprise','EntrepriseController@add');
Route::post('/ajoutmoral','EntrepriseController@moral');
Route::get('/addcompte','CompteController@add');
Route::get('/listecompte','CompteController@lister');
