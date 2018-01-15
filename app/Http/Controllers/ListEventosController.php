<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use App\Event;
use App\Province;
use App\Catalogo_textos;
use Illuminate\Http\Request;

class ListEventosController extends Controller
{
    public function __invoke(Request $request) {
        $eventos = Event::where('activo', '=', 1)
            ->select('id','plan','nombre','evento_bg_picture','informacion','slug','costo','fecha_evento',
                'direccion','telefono','celular','email','web','facebook','twitter','user_id',
                'dia_evento','mes_evento','year_evento','hora_evento')
            ->orderBy('plan')
            ->orderBy('nombre')
            ->paginate(14);

        $terms = Catalogo_textos::select('texto')->where('nombre', 'terminos_condiciones')->get();

        $bannerData = BannerCategory::where('category_id','=','7')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url','url1','url2','url3')
            ->get();

        $provinces = Province::all(['name','id']);

        return view('vendor.adminlte.layouts.eventos', compact('eventos','provinces', 'bannerData', 'terms'));
    }
}
