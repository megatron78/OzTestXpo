<?php

namespace App\Http\Controllers;

use App\Pregrade;
use App\Catalogo_textos;

class ShowSuperiorController extends Controller
{
    public function __invoke($provincename, $cityname, Pregrade $pregrade, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($pregrade->slug != $slug) {
            return redirect($pregrade->url, 301);
        }
        $terms = Catalogo_textos::select('texto')->where('nombre', 'terminos_condiciones')->get();
        return view('institutions.showpregrade', compact('pregrade', 'terms'));
    }
}
