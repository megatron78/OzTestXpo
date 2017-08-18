<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use App\Province;
use App\Institution;
use Illuminate\Http\Request;

class ListPreescolarController extends Controller
{
    public function listPreescolar() {
        $instituciones = Institution::where('preescolar', '=', 1)
            ->select('id','plan','nombre','nombre_corto','slug','masculino','femenino','mixto','preescolar',
                'escuela','colegio','province_id','canton_id','parish_id','city_id','user_id',
                'direccion','telefono','celular','email','facebook','twitter')
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $bannerData = BannerCategory::where('category_id','=','1')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        $provinces = Province::all(['name','code']);

        return view('vendor.adminlte.layouts.preescolar', compact('instituciones','provinces', 'bannerData'));
    }
}
