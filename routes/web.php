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

Route::get('/', 'HeroController@index');

//Route::put('/editar/{id}', function () {
//    return view('update');
//});

Route::get('/editar/{id}', 'HeroController@editar')->name('editar');

Route::post('/update/{id}', 'HeroController@update')->name('update');

//Route::post('/update', 'HeroController@editar');

Route::get('/cadastrar', function () {
    return view('register');
});

Route::post('/insert', 'HeroController@inserir');

Route::get('/deletar/{id}', 'HeroController@delete')->name('deletar');
