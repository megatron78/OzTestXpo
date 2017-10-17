<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use Illuminate\Support\Facades\Session;
use App\Institution;
use App\Province;
use Illuminate\Http\Request;

class ListEscuelaColegioController extends Controller
{
    public function __invoke(Request $request) {
        //dd($request->get('search_province')."-".$request->get('search_city'));
        $instituciones = Institution::where('activo', '=', 1)
            ->where(function($query) {
                $query->where('escuela', '=', 1)->orWhere('colegio', '=', 1);
            })
            ->select('id','plan','nombre','nombre_corto','slug','masculino','femenino','mixto','preescolar',
                'escuela','colegio','province_id','canton_id','parish_id','city_id','sector_id','user_id',
                'direccion','telefono','celular','email','facebook','twitter')
            ->scopes($this->getRouteScope($request))
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $bannerData = BannerCategory::where('category_id','=','3')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        $provinces = Province::all(['name','id']);

        if(!$instituciones->first())
            Session::flash('flash_message', 'No se encontraron registros.');

        return view('vendor.adminlte.layouts.escuelacolegio', compact('instituciones','provinces', 'bannerData'));
    }

    protected function getRouteScope(Request $request) {
        $scopes = [];
        if(!is_null($request->get('search_province')))
            $scopes = array_add($scopes, 'province', $request->get('search_province'));
        if(!is_null($request->get('search_city')))
            $scopes = array_add($scopes, 'city', $request->get('search_city'));
        if(!is_null($request->get('search_sector')))
            $scopes = array_add($scopes, 'sector', $request->get('search_sector'));
        if(!is_null($request->get('search_institution')))
            $scopes = array_add($scopes, 'nombreKeyword', $request->get('search_institution'));
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
        if(!is_null($request->get('advsearch_chkLaico'))) {
            $religioso=0;
            if(!is_null($request->get('advsearch_chkReligioso')))
                $religioso=1;
            $scopes = array_add($scopes, 'laico', [$request->get('advsearch_chkLaico'), $religioso]);
        }
        if(!is_null($request->get('advsearch_chkReligioso'))) {
            $laico=0;
            if(!is_null($request->get('advsearch_chkLaico')))
                $laico=1;
            $scopes = array_add($scopes, 'religioso', [$request->get('advsearch_chkReligioso'), $laico]);
        }
        if(!is_null($request->get('advsearch_chkMujeres'))) {
            $mixto=0;
            $hombres=0;
            if(!is_null($request->get('advsearch_chkHombres')))
                $hombres=1;
            if(!is_null($request->get('advsearch_chkMixto')))
                $mixto=1;
            $scopes = array_add($scopes, 'femenino', [$request->get('advsearch_chkMujeres'), $mixto, $hombres]);
        }
        if(!is_null($request->get('advsearch_chkMixto'))) {
            $femenino=0;
            $hombres=0;
            if(!is_null($request->get('advsearch_chkHombres')))
                $hombres=1;
            if(!is_null($request->get('advsearch_chkMujeres')))
                $femenino=1;
            $scopes = array_add($scopes, 'mixto', [$request->get('advsearch_chkMixto'), $femenino, $hombres]);
        }
        if(!is_null($request->get('advsearch_chkHombres'))) {
            $femenino=0;
            $mixto=0;
            if(!is_null($request->get('advsearch_chkMujeres')))
                $femenino=1;
            if(!is_null($request->get('advsearch_chkMixto')))
                $mixto=1;
            $scopes = array_add($scopes, 'masculino', [$request->get('advsearch_chkHombres'), $femenino, $mixto]);
        }
        if(!is_null($request->get('advsearch_chkExtendido')))
            $scopes = array_add($scopes, 'horario_extendido', $request->get('advsearch_chkExtendido'));
        if(!is_null($request->get('advsearch_costo'))) {
            //Si es fiscal en la búsqueda no tomar en cuenta la pensión
            if(is_null($request->get('advsearch_chkFiscal')))
                $scopes = array_add($scopes, 'pago_promedio_escuela', $request->get('advsearch_costo'));
        }
        return isset($scopes) ? $scopes : [];
        //return [];
    }
}
