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

Route::get('/', function () {
    return view('welcome');
});

Route::get('preescolar', [
    'uses' => 'ListPreescolarController@listPreescolar',
    'as' => 'preescolar.all',
]);

Route::get('escuela_colegio', [
    'uses' => 'ListEscuelaColegioController@listEscuelaColegio',
    'as' => 'escuela_colegio.all',
]);

Route::get('superior', [
    'uses' => 'ListSuperiorController@listSuperior',
    'as' => 'superior.all',
]);

Route::get('posgrado', [
    'uses' => 'ListPosgradoController@listPosgrado',
    'as' => 'posgrado.all',
]);

Route::get('cursos_seminarios', [
    'uses' => 'ListCursosSeminariosController@listCursosSeminarios',
    'as' => 'cursos_seminarios.all',
]);

Route::get('eventos', [
    'uses' => 'ListEventosController@listEventos',
    'as' => 'eventos.all',
]);

Route::get('planes', [
    'uses' => 'ListPlanesController@listPlanes',
    'as' => 'planes.all',
]);

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
