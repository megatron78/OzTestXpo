<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use Illuminate\Support\Facades\Session;
use App\Pregrade;
use App\Province;
use App\City;
use App\Catalogo_textos;
use Illuminate\Http\Request;

class ListSuperiorController extends Controller
{
    public function __invoke(Request $request) {
        Session::forget('flash_message');
        $superiors = Pregrade::where('activo', '=', 1)
            ->select('id','plan','nombre','pregrade_bg_picture','nombre_corto','slug','carreras','carreras_corto',
                'province_id','city_id','user_id','direccion','telefono','celular','email','facebook','twitter','linkedin')
            ->scopes($this->getRouteScope($request))
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $provinces = Province::all(['name','id']);

        $superiors->load('province');
        $superiors->load('city');

        $terms = Catalogo_textos::select('texto')->where('nombre', 'terminos_condiciones')->get();

        $bannerData = BannerCategory::where('category_id','=','4')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url','url1','url2','url3')
            ->get();

        $tipo=null;
        $cities=null;
        $province_id=0;
        $city_id=0;
        $palabrasClave=null;
        $carrera=null;
        if(!is_null($request->get('search_tipo')))
            $tipo=$request->get('search_tipo');
        if(!is_null($request->get('search_province'))) {
            $province_id = $request->get('search_province');
            $cities=City::where('province_id', $province_id)
                ->select('name', 'id')
                ->get();
        }
        if(!is_null($request->get('search_city'))) {
            $city_id = $request->get('search_city');
            $cities=City::where('province_id', $province_id)
                ->select('name', 'id')
                ->get();
        }
        if(!is_null($request->get('search_institution'))) {
            $palabrasClave=$request->get('search_institution');
        }
        if(!is_null($request->get('search_carreras'))) {
            $carrera=$request->get('search_carreras');
        }

        $chkFiscal=0;
        $chkFiscomisional=0;
        $chkParticular=-1;
        $chkPresencial=0;
        $chkSemipresencial=0;
        $chkDistancia=0;

        //dd(basename($_SERVER['HTTP_REFERER']));
        if(strpos(basename($_SERVER['HTTP_REFERER']), 'superior') !== false) {
            $chkParticular=0;
        }

        if(!is_null($request->get('advsearch_chkFiscal')))
            $chkFiscal=1;
        if(!is_null($request->get('advsearch_chkFiscomisional')))
            $chkFiscomisional=1;
        if(!is_null($request->get('advsearch_chkParticular')))
            $chkParticular=1;
        if(!is_null($request->get('advsearch_chkPresencial')))
            $chkPresencial=1;
        if(!is_null($request->get('advsearch_chkSemipresencial')))
            $chkSemipresencial=1;
        if(!is_null($request->get('advsearch_chkDistancia')))
            $chkDistancia=1;

        if(!$superiors->first())
            Session::flash('flash_message', 'No se encontraron registros.');

        return view('vendor.adminlte.layouts.superior', compact('superiors','provinces', 'bannerData',
            'province_id', 'cities', 'city_id', 'palabrasClave', 'chkFiscal', 'chkFiscomisional', 'chkParticular',
            'chkPresencial', 'chkSemipresencial', 'chkDistancia', 'tipo', 'carrera', 'terms'));
    }

    protected function getRouteScope(Request $request) {
        $scopes = [];
        if(!is_null($request->get('search_province')))
            $scopes = array_add($scopes, 'province', $request->get('search_province'));
        if(!is_null($request->get('search_city')))
            $scopes = array_add($scopes, 'city', $request->get('search_city'));
        if(!is_null($request->get('search_institution')))
            $scopes = array_add($scopes, 'nombreKeyword', $request->get('search_institution'));
        if(!is_null($request->get('search_tipo')))
            $scopes = array_add($scopes, 'tipo', $request->get('search_tipo'));
        if(!is_null($request->get('advsearch_chkFiscal'))) {
            $privado=0;
            $fiscomisional=0;
            if(!is_null($request->get('advsearch_chkFiscomisional')))
                $fiscomisional=1;
            if(!is_null($request->get('advsearch_chkParticular')))
                $privado=1;
            $scopes = array_add($scopes, 'fiscal', [$request->get('advsearch_chkFiscal'), $privado, $fiscomisional]);
        }
        if(!is_null($request->get('advsearch_chkFiscomisional'))) {
            $privado=0;
            $fiscal=0;
            if(!is_null($request->get('advsearch_chkParticular')))
                $privado=1;
            if(!is_null($request->get('advsearch_chkFiscal')))
                $fiscal=1;
            $scopes = array_add($scopes, 'fiscomisional', [$request->get('advsearch_chkFiscomisional'), $privado, $fiscal]);
        }
        if(!is_null($request->get('advsearch_chkParticular'))) {
            $fiscal=0;
            $fiscomisional=0;
            if(!is_null($request->get('advsearch_chkFiscal')))
                $fiscal=1;
            if(!is_null($request->get('advsearch_chkFiscomisional')))
                $fiscomisional=1;
            $scopes = array_add($scopes, 'privado', [$request->get('advsearch_chkParticular'), $fiscal, $fiscomisional]);
        }
        if(!is_null($request->get('advsearch_chkPresencial'))) {
            $semipresencial=0;
            $distancia=0;
            if(!is_null($request->get('advsearch_chkDistancia')))
                $distancia=1;
            if(!is_null($request->get('advsearch_chkSemipresencial')))
                $semipresencial=1;
            $scopes = array_add($scopes, 'presencial', [$request->get('advsearch_chkPresencial'), $semipresencial, $distancia]);
        }
        if(!is_null($request->get('advsearch_chkSemipresencial'))) {
            $presencial=0;
            $distancia=0;
            if(!is_null($request->get('advsearch_chkDistancia')))
                $distancia=1;
            if(!is_null($request->get('advsearch_chkPresencial')))
                $presencial=1;
            $scopes = array_add($scopes, 'semipresencial', [$request->get('advsearch_chkSemipresencial'), $presencial, $distancia]);
        }
        if(!is_null($request->get('advsearch_chkDistancia'))) {
            $presencial=0;
            $semipresencial=0;
            if(!is_null($request->get('advsearch_chkPresencial')))
                $presencial=1;
            if(!is_null($request->get('advsearch_chkSemipresencial')))
                $semipresencial=1;
            $scopes = array_add($scopes, 'distancia', [$request->get('advsearch_chkDistancia'), $presencial, $semipresencial]);
        }
        if(!is_null($request->get('search_carreras')))
            $scopes = array_add($scopes, 'carreras', $request->get('search_carreras'));

        return isset($scopes) ? $scopes : [];
        //return [];
    }
}
