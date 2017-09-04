<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use App\Institution;
use App\Province;
use Illuminate\Http\Request;

class ListEscuelaColegioController extends Controller
{
    public function __invoke(Request $request) {
        //dd($request->get('search_province')."-".$request->get('search_city'));
        $instituciones = Institution::where('activo', '=', 1)
            ->where('escuela', '=', 1)->orWhere('colegio', '=', 1)
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

        $provinces = Province::all(['name','code']);

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
        if(!is_null($request->get('advsearch_chkLaico')))
            switch ($request->get('advsearch_chkLaico')){
                case "laic":
                    $scopes = array_add($scopes, 'laico', 1);
                    break;
                case "religious":
                    $scopes = array_add($scopes, 'religioso', 1);
                    break;
            }
        if(!is_null($request->get('advsearch_sexo')))
            switch ($request->get('advsearch_sexo')){
                case "all_female":
                    $scopes = array_add($scopes, 'femenino', 1);
                    break;
                case "male_female":
                    $scopes = array_add($scopes, 'mixto', 1);
                    break;
                case "all_male":
                    $scopes = array_add($scopes, 'masculino', 1);
                    break;
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
