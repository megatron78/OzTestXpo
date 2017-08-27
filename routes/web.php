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

use App\Institution;
use App\City;
use App\Sector;
use Illuminate\Support\Facades\Input;

Route::get('/', ['uses' => 'Home2Controller@showHome', 'as' => 'destacados',]);

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

Route::get('institutions/{institution}-{slug}', [
    'as' => 'institutions.show',
    'uses' => 'ShowInstitutionController',
])->where('institution', '\d+');

Route::get('/ajax-city/', function() {
   $province_id = Input::get('province_id');

   $cities = City::where('province_id', '=', $province_id)->orderBy('name')->get();

   return $cities;
});

Route::get('/ajax-sector/', function() {
    $city_id = Input::get('city_id');

    $sectors = Sector::where('city_id', '=', $city_id)->orderBy('nombre')->get();
    if(!count($sectors) > 0) {
        $sectors = Sector::where('city_id', '=', null)->orderBy('nombre')->get();
    }

    return $sectors;
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
