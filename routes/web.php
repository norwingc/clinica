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
    // $user = new \App\Models\User();
    // $user->name = 'Norwin Guerrero';
    // $user->email = 'norwingcruz@gmail.com';
    // $user->password = bcrypt('Adm!n!123');
    // $user->save();
});

Route::view('/login', 'login');
Route::post('/login', 'AuthController@login')->name('login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

