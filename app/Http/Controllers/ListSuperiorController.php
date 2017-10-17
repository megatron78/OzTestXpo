<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use Illuminate\Support\Facades\Session;
use App\Pregrade;
use App\Province;
use Illuminate\Http\Request;

class ListSuperiorController extends Controller
{
    public function __invoke(Request $request) {
        $superiors = Pregrade::where('activo', '=', 1)
            ->select('id','plan','nombre','pregrade_bg_picture','nombre_corto','slug','carreras','carreras_corto',
                'province_id','city_id','user_id','direccion','telefono','celular','email','facebook','twitter','linkedin')
            ->scopes($this->getRouteScope($request))
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $provinces = Province::all(['name','id']);

        $bannerData = BannerCategory::where('category_id','=','4')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        if(!$superiors->first())
            Session::flash('flash_message', 'No se encontraron registros.');

        return view('vendor.adminlte.layouts.superior', compact('superiors','provinces', 'bannerData'));
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
