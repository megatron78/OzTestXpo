<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use App\Province;
use App\Institution;
use Illuminate\Http\Request;
use function Sodium\add;

class ListPreescolarController extends Controller
{
    public function __invoke(Request $request) {
        //dd($request->get('search_province')."-".$request->get('search_city'));
        $instituciones = Institution::where('activo', '=', 1)
            ->where('preescolar', '=', 1)->where('escuela', '=', 0)
            ->where('colegio', '=', 0)
            ->select('id','plan','nombre','institution_bg_picture','nombre_corto','slug','masculino','femenino','mixto','preescolar',
                'escuela','colegio','province_id','canton_id','sector_id','parish_id','city_id','user_id',
                'direccion','telefono','celular','email','facebook','twitter')
            ->scopes($this->getRouteScope($request))
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $bannerData = BannerCategory::where('category_id','=','1')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        $provinces = Province::all(['name','code']);

        return view('vendor.adminlte.layouts.preescolar', compact('instituciones','provinces', 'bannerData'));
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
        if(!is_null($request->get('advsearch_chkFiscal')))
            $scopes = array_add($scopes, 'fiscal', $request->get('advsearch_chkFiscal'));
        if(!is_null($request->get('advsearch_chkFiscomisional')))
            $scopes = array_add($scopes, 'fiscomisional', $request->get('advsearch_chkFiscomisional'));
        if(!is_null($request->get('advsearch_chkParticular')))
            $scopes = array_add($scopes, 'privado', $request->get('advsearch_chkParticular'));
        if(!is_null($request->get('advsearch_chkLaico')))
            $scopes = array_add($scopes, 'laico', $request->get('advsearch_chkLaico'));
        if(!is_null($request->get('advsearch_chkReligioso')))
            $scopes = array_add($scopes, 'religioso', $request->get('advsearch_chkReligioso'));
        if(!is_null($request->get('advsearch_chkMujeres')))
            $scopes = array_add($scopes, 'femenino', $request->get('advsearch_chkMujeres'));
        if(!is_null($request->get('advsearch_chkMixto')))
            $scopes = array_add($scopes, 'mixto', $request->get('advsearch_chkMixto'));
        if(!is_null($request->get('advsearch_chkHombres')))
            $scopes = array_add($scopes, 'masculino', $request->get('advsearch_chkHombres'));
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
