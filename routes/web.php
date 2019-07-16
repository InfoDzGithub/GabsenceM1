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
Route::get('ee', function () {
    return view('admin.detailsEnseignant');
});*/

Route::get('enseignant','EnseignantController@index');
Route::get('enseignant/create','EnseignantController@create');
Route::get('enseignants','EnseignantController@store');
//Route::get('ens','EnseignantController@details');
//Route::get('enseignant/{id}/edit','EnseignantController@edit');
//Route::put('enseignant/{id}','EnseignantController@update');
Route::delete('enseignant/{id}','EnseignantController@destroy');