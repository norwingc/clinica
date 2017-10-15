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


Route::name('login')->get('login', 'UsersController@viewLogin');
Route::name('login')->post('login', 'UsersController@login');
Route::name('logout')->delete('login', 'UsersController@logout');

Route::middleware(['auth'])->group(function () {
    Route::view('/', 'home')->name('home');

    Route::prefix('Paciente')->group(function () {
       Route::name('paciente.findById')->post('/User/Find', 'PacienteController@findByCedula');
    });

});

