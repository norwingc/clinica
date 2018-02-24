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


    Route::prefix('Profile')->group(function(){
        Route::name('profile')->get('/', 'ProfileController@index');
        Route::name('profile.avatar')->post('/avatar', 'ProfileController@avatar');
        Route::name('profile.password')->post('/password', 'ProfileController@password');
        Route::name('profile.theme')->get('/theme/{theme}', 'ProfileController@theme');
    });

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
        Route::name('consulta.prenatal.delete')->post('/Prenatal/store/{prenatal}', 'ConsultasController@deletePrenatal');

        Route::name('consulta.colposcopia.store')->post('/Colposcopia/store/{consulta}', 'ConsultasController@storeColposcopia');
        Route::name('consulta.colposcopia.delete')->post('/Colposcopia/store/{prenatal}', 'ConsultasController@deleteColposcopia');

        Route::name('consulta.genecologica.store')->post('/Ginecologica/store/{consulta}', 'ConsultasController@storeGinecologica');
        Route::name('consulta.genecologica.delete')->get('/Ginecologica/delete/{pelvico}', 'ConsultasController@deleteGinecologica');

        Route::name('consulta.pelvico.store')->post('/UltrasonidoPelvico/store/{consulta}', 'ConsultasController@storePelvico');
        Route::name('consulta.pelvico.delete')->get('/UltrasonidoPelvico/delete/{pelvico}', 'ConsultasController@deletePelvico');

        Route::name('consulta.trimestre.store')->post('/UltrasonidoTrimestre/store/{consulta}', 'ConsultasController@storeTrimestre');
        Route::name('consulta.trimestre.delete')->get('/UltrasonidoTrimestre/delete/{trimestre}', 'ConsultasController@deleteTrimestre');

        Route::name('consulta.estructural.store')->post('/UltrasonidoEstructural/store/{consulta}', 'ConsultasController@storeEstructural');
        Route::name('consulta.estructural.delete')->get('/UltrasonidoEstructural/delete/{estructural}', 'ConsultasController@deleteEstructural');

        Route::name('consulta.neurosonografia.store')->post('/Neurosonografia/store/{consulta}', 'ConsultasController@storeNeurosonografia');
        Route::name('consulta.neurosonografia.delete')->get('/Neurosonografia/delete/{neurosono}', 'ConsultasController@deleteNeurosonografia');

        Route::name('consulta.ecocardiografia.store')->post('/Ecocardiografia/store/{consulta}', 'ConsultasController@storeEcocardiografia');
        Route::name('consulta.ecocardiografia.delete')->get('/Ecocardiografia/delete/{neurosono}', 'ConsultasController@deleteEcocardiografia');

        Route::name('consulta.doppler.store')->post('/Doppler/store/{consulta}', 'ConsultasController@storeDoppler');
        Route::name('consulta.doppler.delete')->get('/Doppler/delete/{doppler}', 'ConsultasController@deleteDoppler');

        Route::name('fecha.parto.store')->post('/FechaParto/store/{paciente}', 'ConsultasController@storeFechaParto');
        Route::name('fecha.parto.show')->get('/FechaParto/show/', 'ConsultasController@showFechaParto');
        Route::name('fecha.parto.get')->get('/FechaParto/get/', 'ConsultasController@getFechaParto');

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
        Route::name('report.trimestre')->get('Trimestre/{trimestre}', 'ConsultasController@reportTrimestre');
        Route::name('report.estructural')->get('Estructural/{estructural}', 'ConsultasController@reportEstructural');
        Route::name('report.neurosonografia')->get('Neurosonografia/{neurosonografia}', 'ConsultasController@reportNeurosonografia');
        Route::name('report.ecocardiografia')->get('Ecocardiografia/{ecocardiografia}', 'ConsultasController@reportEcocardiografia');
        Route::name('report.doppler')->get('Doppler/{doppler}', 'ConsultasController@reportDoppler');
        Route::name('report.ginecologica')->get('Ginecologica/{ginecologica}', 'ConsultasController@reportGinecologica');
        Route::name('report.prenatal')->get('Prenatal/{prenatal}', 'ConsultasController@reportPrenatal');
        Route::name('report.colposcopia')->get('Colposcopia/{colposcopia}', 'ConsultasController@reportColposcopia');
    });

});
