<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use Illuminate\Support\Facades\Session;
use App\Province;
use App\Country;
use App\City;
use App\PosgradeCourseSeminar;
use Illuminate\Http\Request;

class ListPosgradoController extends Controller
{
    public function __invoke(Request $request) {
        //dd($request->get('search_province')."-".$request->get('search_city'));
        $posgrades = PosgradeCourseSeminar::where('activo', '=', 1)
            ->orWhere('tipo', '=', 'Masterado')
            ->orWhere('tipo', '=', 'Doctorado')
            ->orWhere('tipo', '=', 'PHD')
            ->select('id','plan','nombre','institucion','nombre_corto','slug','province_id','city_id','user_id','country_id',
                'objetivo','duracion','fecha_inicio','costo','presencial','semipresencial','distancia',
                'telefono','celular','email','facebook','twitter')
            ->scopes($this->getRouteScope($request))
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $posgrades->load('country');
        $posgrades->load('province');
        $posgrades->load('city');

        $bannerData = BannerCategory::where('category_id','=','5')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        $tipo=null;
        $cities=null;
        $province_id=0;
        $city_id=0;
        $palabrasClave=null;
        $institucion=null;
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
        if(!is_null($request->get('search_keywordtopic'))) {
            $palabrasClave=$request->get('search_keywordtopic');
        }
        if(!is_null($request->get('search_institucion'))) {
            $institucion=$request->get('search_institucion');
        }

        $chkPresencial=0;
        $chkSemipresencial=0;
        $chkDistancia=0;
        $advsearch_costo=null;

        if(!is_null($request->get('advsearch_costo')))
            $advsearch_costo=$request->get('advsearch_costo');
        else
            $advsearch_costo="0,11000";
        if(!is_null($request->get('advsearch_chkPresencial')))
            $chkPresencial=1;
        if(!is_null($request->get('advsearch_chkSemipresencial')))
            $chkSemipresencial=1;
        if(!is_null($request->get('advsearch_chkDistancia')))
            $chkDistancia=1;

        if(!$posgrades->first())
            Session::flash('flash_message', 'No se encontraron registros.');

        $countries = Country::all(['printable_name','id']);
        $provinces = Province::all(['name','id']);
        return view('vendor.adminlte.layouts.posgrado', compact('posgrades','provinces', 'bannerData', 'countries',
            'province_id', 'cities', 'city_id', 'palabrasClave',
            'chkPresencial', 'chkSemipresencial', 'chkDistancia', 'tipo', 'institucion', 'advsearch_costo'));
    }

    protected function getRouteScope(Request $request) {
        $scopes = [];
        if(!is_null($request->get('search_country')))
            $scopes = array_add($scopes, 'country', $request->get('search_country'));
        if(!is_null($request->get('search_province')))
            $scopes = array_add($scopes, 'province', $request->get('search_province'));
        if(!is_null($request->get('search_city')))
            $scopes = array_add($scopes, 'city', $request->get('search_city'));
        if(!is_null($request->get('search_keywordtopic')))
            $scopes = array_add($scopes, 'keywordtopic', $request->get('search_keywordtopic'));
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
        if(!is_null($request->get('search_institucion')))
            $scopes = array_add($scopes, 'institucion', $request->get('search_institucion'));
        if(!is_null($request->get('search_tipo')))
            $scopes = array_add($scopes, 'tipo', $request->get('search_tipo'));
        if(!is_null($request->get('advsearch_costo'))) {
            $scopes = array_add($scopes, 'costo_promedio_posgrados', $request->get('advsearch_costo'));
        }

        return isset($scopes) ? $scopes : [];
        //return [];
    }
}
