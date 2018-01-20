<?php

namespace App\Http\Controllers;

use App\PosgradeCourseSeminar;
use App\Catalogo_textos;

class ShowPosgradeController extends Controller
{
    public function __invoke($provincename, $cityname, PosgradeCourseSeminar $posgrado, $slug) {

        //abort_unless($post->slug == $slug, 404);
        if($posgrado->slug != $slug) {
            return redirect($posgrado->url, 301);
        }
        $terms = Catalogo_textos::select('texto')->where('nombre', 'terminos_condiciones')->get();
        return view('institutions.showposgrade', compact('posgrado', 'terms'));
    }
}
