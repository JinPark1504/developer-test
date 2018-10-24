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

Route::prefix('notes')->group(function() {
    Route::get('{email}', 'NotesController@index');
    Route::get('{email}/create', 'NotesController@create');
    Route::post('{email}/create', 'NotesController@store');
    Route::get('edit/{note}', 'NotesController@edit');
    Route::patch('edit/{note}', 'NotesController@update')->name('notes.update');
    Route::delete('delete/{note}', 'NotesController@destroy')->name('notes.delete');
});