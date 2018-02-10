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

Route::get('test', function(){
    return view('test');
});

Route::fallback('ResourcesController@notFoud');

Route::name('login')->get('login', 'UsersController@viewLogin');
Route::name('login')->post('login', 'UsersController@login');
Route::name('logout')->delete('login', 'UsersController@logout');

Route::middleware(['auth'])->group(function () {
    Route::view('/', 'home')->name('home');

    Route::prefix('Pacientes')->group(function () {
        Route::name('paciente.get')->get('get/{id?}', 'PacienteController@get');
        Route::name('paciente.getAge')->get('getAge/{fecha}', 'PacienteController@getAge');
        Route::name('pacientes')->get('/', 'PacienteController@index');
        Route::name('paciente.findById')->post('/User/Find', 'PacienteController@findByCedula');
        Route::name('paciente.finCedula')->get('/findCedula/{cedula}', 'PacienteController@finCedula');

        Route::name('paciente.show')->get('User/View/{paciente}', 'PacienteController@show');

        Route::name('paciente.store')->post('/', 'PacienteController@store');
        Route::name('paciente.personal.update')->put('User/PersonalInformation/{paciente}', 'PacienteController@updatePersonal');

        Route::name('paciente.personal')->get('User/PersonalInformation/{paciente}', 'PacienteController@personal');
        Route::name('paciente.historia')->get('User/ClinicHistory/{paciente}', 'PacienteController@historia');

        Route::name('paciente.historia.store')->post('/Historia/store/{paciente}', 'PacienteController@storeHistoria');
        Route::name('paciente.historia.update')->post('/Historia/update/{historiaclinica}', 'PacienteController@updateHistoria');
        Route::name('paciente.historia.get')->get('/Historia/get/{paciente}', 'PacienteController@getHistoria');

    });

    Route::prefix('Consultas')->group(function () {
        Route::name('consulta.delete')->get('/delete/{consulta}', 'ConsultasController@delete');

        Route::name('consulta.prenatal.store')->post('/Prenatal/store/{consulta}', 'ConsultasController@storePrenatal');

        Route::name('consulta.pelvico.store')->post('/UltrasonidoPelvico/store/{consulta}', 'ConsultasController@storePelvico');
        Route::name('consulta.pelvico.delete')->get('/UltrasonidoPelvico/delete/{pelvico}', 'ConsultasController@deletePelvico');

        Route::name('consulta.1trimestre.store')->post('/UltrasonidoTrimestre/store/{consulta}', 'ConsultasController@storeTrimestre');
        Route::name('consulta.1trimestre.delete')->get('/UltrasonidoTrimestre/delete/{trimestre}', 'ConsultasController@deleteTrimestre');

    });

    Route::prefix('Citas')->group(function () {
        Route::name('citas')->get('/', 'CitasController@index');
        Route::name('citas.api')->get('/api', 'CitasController@api');
        Route::name('citas.get')->get('/get/{id?}', 'CitasController@get');
        Route::name('citas.create')->get('/Create', 'CitasController@create');
        Route::name('citas.store')->post('/Create/{paciente?}', 'CitasController@store');
    });

    Route::prefix('Reports')->group(function () {
        Route::name('report.pelvico')->get('Pelvico/{pelvico}', 'ConsultasController@reportPelvico');
    });

});

