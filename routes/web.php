<?php

use App\User;

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
    $users = User::all();
    return view('users', ['users'=>$users]);
});

Route::get('notes/{email}', 'NotesController@index');
Route::get('notes/{email}/create', 'NotesController@create');
Route::post('notes/{email}/create', 'NotesController@store');
Route::get('notes/edit/{note}', 'NotesController@edit');
Route::patch('notes/edit/{note}', 'NotesController@update');
Route::delete('notes/delete', 'NotesController@destroy');