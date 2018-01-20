<?php

namespace App\Http\Controllers;

use App\Institution;
use App\Catalogo_textos;

class ShowEscuelaColegioController extends Controller
{
    public function __invoke($provincename, $cityname, Institution $institution, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($institution->slug != $slug) {
            return redirect($institution->url, 301);
        }
        $terms = Catalogo_textos::select('texto')->where('nombre', 'terminos_condiciones')->get();
        return view('institutions.showegbbgu', compact('institution', 'terms'));
    }
}
