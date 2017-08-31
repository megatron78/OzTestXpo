<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use App\Province;
use App\PosgradeCourseSeminar;
use Illuminate\Http\Request;

class ListCursoSeminarioController extends Controller
{
    public function __invoke(Request $request) {
        //dd($request->get('search_province')."-".$request->get('search_city'));
        $cursoseminarios = PosgradeCourseSeminar::orWhere('tipo', '=', 'Curso Específico')
            ->orWhere('tipo', '=', 'Curso por Niveles')
            ->orWhere('tipo', '=', 'Seminario')
            ->orWhere('tipo', '=', 'Taller')
            ->select('id','plan','nombre','institution','nombre_corto','slug','province_id','city_id','user_id',
                'objetivo','duracion','fecha_inicio','costo','presencial','semipresencial','distancia',
                'direccion','telefono','celular','email','facebook','twitter')
            ->scopes($this->getRouteScope($request))
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $bannerData = BannerCategory::where('category_id','=','6')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        $provinces = Province::all(['name','code']);

        return view('vendor.adminlte.layouts.cursoseminario', compact('cursoseminarios','provinces', 'bannerData'));
    }

    protected function getRouteScope(Request $request) {
        $scopes = [];
        if(!is_null($request->get('search_province')))
            $scopes = array_add($scopes, 'province', $request->get('search_province'));
        if(!is_null($request->get('search_city')))
            $scopes = array_add($scopes, 'city', $request->get('search_city'));
        if(!is_null($request->get('search_keywordtopic')))
            $scopes = array_add($scopes, 'keywordtopic', $request->get('search_keywordtopic'));
        if(!is_null($request->get('advsearch_chkPresencial')))
            $scopes = array_add($scopes, 'presencial', $request->get('advsearch_chkPresencial'));
        if(!is_null($request->get('advsearch_chkSemipresencial')))
            $scopes = array_add($scopes, 'semipresencial', $request->get('advsearch_chkSemipresencial'));
        if(!is_null($request->get('advsearch_chkDistancia')))
            $scopes = array_add($scopes, 'distancia', $request->get('advsearch_chkDistancia'));
        if(!is_null($request->get('search_institucion')))
            $scopes = array_add($scopes, 'institucion', $request->get('search_institucion'));
        if(!is_null($request->get('search_tipo')))
            $scopes = array_add($scopes, 'tipo', $request->get('search_tipo'));
        if(!is_null($request->get('advsearch_costo'))) {
            $scopes = array_add($scopes, 'costo_promedio', $request->get('advsearch_costo'));
        }

        return isset($scopes) ? $scopes : [];
        //return [];
    }
}
