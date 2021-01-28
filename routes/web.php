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

use App\Models\Paciente;

Route::get('test', function(){
    // $user = new \App\Models\User();
    // $user->name = 'Norwin Guerrero';
    // $user->email = 'norwingcruz@gmail.com';
    // $user->password = bcrypt('Adm!n!123');
    // $user->save();

    return Paciente::with('historia_clinica')->get();
});

Route::view('/login', 'login');
Route::post('/login', 'AuthController@login')->name('login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'Paciente'], function () {
        Route::get('/', 'PacienteController@index')->name('paciente.index');
        Route::get('/api', 'PacienteController@api')->name('paciente.api');
        Route::post('/store', 'PacienteController@store')->name('paciente.store');
        Route::post('/update', 'PacienteController@update')->name('paciente.update');

        Route::group(['prefix' => 'HistoriaClinica'], function () {
            Route::get('/{paciente}', 'PacienteHistoriaClinicaController@index')->name('paciente.historia.index');
            Route::post('/store/{Paciente}', 'PacienteController@store')->name('paciente.historia.store');
            Route::post('/update/{PacienteHistoriaClinica}', 'PacienteController@update')->name('paciente.historia.update');
            Route::post('/delete/{PacienteHistoriaClinica}', 'PacienteController@delete')->name('paciente.historia.delete');
            Route::get('/download/{Paciente}', 'PacienteController@download')->name('paciente.historia.download');
        });
    });
});

