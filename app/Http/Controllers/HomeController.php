<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\{InstitutionsView, Catalogo_textos};
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('adminlte::home');
    }

    protected function getRouteScope(Request $request) {
        $scopes = [];
        if(!is_null($request->get('search_user')))
            $scopes = array_add($scopes, 'user', $request->get('search_user'));
        if(!is_null($request->get('search_nombre')))
            $scopes = array_add($scopes, 'nombre', $request->get('search_nombre'));

        return isset($scopes) ? $scopes : [];
        //return [];
    }

    protected function getInstitutionsByAuthUser() {
        if(auth()->user()->isAdmin()) {
            $instituciones = InstitutionsView::select('id'
                    , 'activo'
                    , 'tipo'
                    , 'clasificacion'
                    , 'plan'
                    , 'nombre'
                    , 'institution_bg_picture'
                    , 'institution'
                    , 'nombre_corto'
                    , 'slug'
                    , 'carreras'
                    , 'masculino'
                    , 'femenino'
                    , 'mixto'
                    , 'preescolar'
                    , 'escuela'
                    , 'colegio'
                    , 'province_id'
                    , 'city_id'
                    , 'sector_id'
                    , 'user_id'
                    , 'costo'
                    , 'fecha_evento'
                    , 'hora_evento'
                    , 'objetivo'
                    , 'duracion'
                    , 'fecha_inicio'
                    , 'presencial'
                    , 'semipresencial'
                    , 'distancia'
                    , 'direccion'
                    , 'telefono'
                    , 'celular'
                    , 'email'
                    , 'web'
                    , 'facebook'
                    , 'twitter'
                    , 'linkedin'
                    , 'province_name'
                    , 'city_name'
                    , 'sector_name'
                    , 'plan_desde'
                    , 'plan_hasta')
                ->orderBy('plan')
                ->orderBy('created_at', 'desc')
                ->orderBy('nombre');
        }
        else {
            $instituciones = InstitutionsView::where('activo', '=', 1)
                ->where('user_id', '=', auth()->id())
                ->select('id'
                    , 'activo'
                    , 'tipo'
                    , 'clasificacion'
                    , 'plan'
                    , 'nombre'
                    , 'institution_bg_picture'
                    , 'institution'
                    , 'nombre_corto'
                    , 'slug'
                    , 'carreras'
                    , 'masculino'
                    , 'femenino'
                    , 'mixto'
                    , 'preescolar'
                    , 'escuela'
                    , 'colegio'
                    , 'province_id'
                    , 'city_id'
                    , 'sector_id'
                    , 'user_id'
                    , 'costo'
                    , 'fecha_evento'
                    , 'hora_evento'
                    , 'objetivo'
                    , 'duracion'
                    , 'fecha_inicio'
                    , 'presencial'
                    , 'semipresencial'
                    , 'distancia'
                    , 'direccion'
                    , 'telefono'
                    , 'celular'
                    , 'email'
                    , 'web'
                    , 'facebook'
                    , 'twitter'
                    , 'linkedin'
                    , 'province_name'
                    , 'city_name'
                    , 'sector_name'
                    , 'plan_desde'
                    , 'plan_hasta')
                ->orderBy('plan')
                ->orderBy('created_at', 'desc')
                ->orderBy('nombre');
        }

        return DataTables::of($instituciones)->make(true);
    }
}