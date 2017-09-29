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
        if(!is_null($request->get('advsearch_sostenimiento')))
            switch ($request->get('advsearch_sostenimiento')){
                case "public":
                    $scopes = array_add($scopes, 'fiscal', 1);
                    break;
                case "private":
                    $scopes = array_add($scopes, 'privado', 1);
                    break;
                case "public_private":
                    $scopes = array_add($scopes, 'fiscomisional', 1);
                    break;
            }
        if(!is_null($request->get('advsearch_chkPresencial')))
            switch ($request->get('advsearch_chkPresencial')){
                case "presencial":
                    $scopes = array_add($scopes, 'presencial', 1);
                    break;
                case "semipresencial":
                    $scopes = array_add($scopes, 'semipresencial', 1);
                    break;
                case "distancia":
                    $scopes = array_add($scopes, 'distancia', 1);
                    break;
            }
        if(!is_null($request->get('search_carreras')))
            $scopes = array_add($scopes, 'carreras', $request->get('search_carreras'));

        return isset($scopes) ? $scopes : [];
        //return [];
    }
}
