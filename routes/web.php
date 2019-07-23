<?php

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
/*
Route::get('details', function () {
    return view('admin.detailsEnseignant');
});
*/
Route::get('enseignant','EnseignantController@index');
Route::get('enseignant/create','EnseignantController@create');
Route::post('enseignants','EnseignantController@store');
Route::get('enseignant/{id}/details','EnseignantController@details');
Route::get('enseignant/{id}/edit','EnseignantController@edit');
Route::post('enseignant/{id}','EnseignantController@update');
Route::delete('enseignant/{id}','EnseignantController@destroy');
/****************Matiere****************************************/
Route::get('matiere','MatiereController@index');
Route::get('matiere/create','MatiereController@create');
Route::get('matieres','MatiereController@store');
Route::get('matiere/{id}/details','MatiereController@details');
Route::get('matiere/{id}/edit','MatiereController@edit');
Route::post('matiere/{id}','MatiereController@update');
Route::delete('matiere/{id}','MatiereController@destroy');
/***********************Examen****************************************/
Route::get('examen/{id}/create','ExamenController@create');
Route::get('examens/{id}','ExamenController@store');
Route::get('matiere/{id}/details','MatiereController@details');
Route::get('examen/{id}','ExamenController@destroy');
Route::get('examen/{id}/edit','ExamenController@edit');
Route::post('examen/{id}','ExamenController@update');
/***********************Etudiant****************************************/
Route::get('etudiant/create','EtudiantController@create');