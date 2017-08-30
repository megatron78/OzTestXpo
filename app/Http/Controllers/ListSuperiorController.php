<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use App\Pregrade;
use App\Province;
use Illuminate\Http\Request;

class ListSuperiorController extends Controller
{
    public function __invoke(Request $request) {
        $superiors = Pregrade::where('activo', '=', 1)
            ->select('id','plan','nombre','pregrade_bg_picture','nombre_corto','slug','carreras',
                'province_id','city_id','user_id','direccion','telefono','celular','email','facebook','twitter','linkedin')
            ->scopes($this->getRouteScope($request))
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $provinces = Province::all(['name','code']);

        $bannerData = BannerCategory::where('category_id','=','4')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

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
        if(!is_null($request->get('advsearch_chkFiscal')))
            $scopes = array_add($scopes, 'fiscal', $request->get('advsearch_chkFiscal'));
        if(!is_null($request->get('advsearch_chkFiscomisional')))
            $scopes = array_add($scopes, 'fiscomisional', $request->get('advsearch_chkFiscomisional'));
        if(!is_null($request->get('advsearch_chkParticular')))
            $scopes = array_add($scopes, 'privado', $request->get('advsearch_chkParticular'));
        if(!is_null($request->get('advsearch_chkPresencial')))
            $scopes = array_add($scopes, 'presencial', $request->get('advsearch_chkPresencial'));
        if(!is_null($request->get('advsearch_chkSemipresencial')))
            $scopes = array_add($scopes, 'semipresencial', $request->get('advsearch_chkSemipresencial'));
        if(!is_null($request->get('advsearch_chkDistancia')))
            $scopes = array_add($scopes, 'distancia', $request->get('advsearch_chkDistancia'));
        if(!is_null($request->get('search_carreras')))
            $scopes = array_add($scopes, 'carreras', $request->get('search_carreras'));

        return isset($scopes) ? $scopes : [];
        //return [];
    }
}
