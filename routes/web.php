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
    'uses' => 'ListPreescolarController',
    'as' => 'preescolar.all',
]);

Route::get('escuela_colegio', [
    'uses' => 'ListEscuelaColegioController',
    'as' => 'escuela_colegio.all',
]);

Route::get('superior', [
    'uses' => 'ListSuperiorController',
    'as' => 'superior.all',
]);

Route::get('posgrado', [
    'uses' => 'ListPosgradoController',
    'as' => 'posgrado.all',
]);

Route::get('cursos_seminarios', [
    'uses' => 'ListCursoSeminarioController',
    'as' => 'cursos_seminarios.all',
]);

Route::get('eventos', [
    'uses' => 'ListEventosController',
    'as' => 'eventos.all',
]);

Route::get('planes', [
    'uses' => 'ListPlanesController@listPlanes',
    'as' => 'planes.all',
]);

Route::get('preescolar/{institution}-{slug}', [
    'uses' => 'ShowInstitutionController',
    'as' => 'preescolar.show',
])->where('institution', '\d+');

Route::get('escuelacolegio/{institution}-{slug}', [
    'uses' => 'ShowEscuelaColegioController',
    'as' => 'escuelacolegio.show',
])->where('institution', '\d+');

Route::get('superior/{pregrade}-{slug}', [
    'uses' => 'ShowSuperiorController',
    'as' => 'superior.show',
])->where('pregrade', '\d+');

Route::get('posgrado/{posgradecourseseminar}-{slug}', [
    'uses' => 'ShowPosgradeController',
    'as' => 'posgrado.show',
])->where('posgradecourseseminar', '\d+');

Route::get('cursoseminario/{posgradecourseseminar}-{slug}', [
    'uses' => 'ShowCourseSeminarController',
    'as' => 'cursoseminario.show',
])->where('posgradecourseseminar', '\d+');

Route::get('evento/{event}-{slug}', [
    'uses' => 'ShowEventController',
    'as' => 'evento.show',
])->where('event', '\d+');

Route::get('ajax-city/', function() {
   $province_id = Input::get('province_id');

   $cities = City::where('province_id', '=', $province_id)->orderBy('name')->get();

   return $cities;
});

Route::get('ajax-sector/', function() {
    $city_id = Input::get('city_id');

    $sectors = Sector::where('city_id', '=', $city_id)->orderBy('nombre')->get();
    if(!count($sectors) > 0) {
        $sectors = Sector::where('city_id', '=', null)->orderBy('nombre')->get();
    }

    return $sectors;
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('institutions', [
        'uses' => 'HomeController@getInstitutions',
        'as' => 'institutions.all',
    ]);
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
