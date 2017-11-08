<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use Illuminate\Support\Facades\Session;
use App\Institution;
use App\{Province,City,Sector};
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

        $cities=null;
        $sectors=null;
        $province_id=0;
        $city_id=0;
        $sector_id=0;
        $palabrasClave=null;

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
            $sectors=Sector::where('city_id', $city_id)
                ->select('nombre', 'id')
                ->get();
            if(!count($sectors) > 0) {
                $sectors = Sector::where('city_id', '=', null)->orderBy('nombre')->get();
            }
        }
        if(!is_null($request->get('search_sector'))) {
            $sector_id = $request->get('search_sector');
            $sectors=Sector::where('city_id', $city_id)
                ->select('nombre', 'id')
                ->get();
            if(!count($sectors) > 0) {
                $sectors = Sector::where('city_id', '=', null)->orderBy('nombre')->get();
            }
        }
        if(!is_null($request->get('search_institution'))) {
            $palabrasClave=$request->get('search_institution');
        }

        $chkFiscal=0;
        $chkFiscomisional=0;
        $chkParticular=0;
        $chkLaico=0;
        $chkReligioso=0;
        $chkMujeres=0;
        $chkMixto=0;
        $chkHombres=0;
        $chkExtendido=0;

        if(!is_null($request->get('advsearch_chkFiscal')))
            $chkFiscal=1;
        if(!is_null($request->get('advsearch_chkFiscomisional')))
            $chkFiscomisional=1;
        if(!is_null($request->get('advsearch_chkParticular')))
            $chkParticular=1;
        if(!is_null($request->get('advsearch_chkLaico')))
            $chkLaico=1;
        if(!is_null($request->get('advsearch_chkReligioso')))
            $chkReligioso=1;
        if(!is_null($request->get('advsearch_chkMujeres')))
            $chkMujeres=1;
        if(!is_null($request->get('advsearch_chkHombres')))
            $chkHombres=1;
        if(!is_null($request->get('advsearch_chkMixto')))
            $chkMixto=1;
        if(!is_null($request->get('advsearch_chkExtendido')))
            $chkExtendido=1;

        $provinces = Province::all(['name','id']);

        if(!$instituciones->first())
            Session::flash('flash_message', 'No se encontraron registros.');

        return view('vendor.adminlte.layouts.escuelacolegio', compact('instituciones','provinces', 'bannerData',
            'province_id', 'cities', 'city_id', 'sectors', 'sector_id', 'palabrasClave',
            'chkFiscal', 'chkFiscomisional', 'chkParticular', 'chkLaico', 'chkReligioso', 'chkMujeres', 'chkHombres',
            'chkMixto', 'chkExtendido'));
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
