<?php

namespace App\Http\Controllers;

use App\PosgradeCourseSeminar;
use App\Catalogo_textos;

class ShowCourseSeminarController extends Controller
{
    public function __invoke($provincename, $cityname, PosgradeCourseSeminar $cursoseminario, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($cursoseminario->slug != $slug) {
            return redirect($cursoseminario->url, 301);
        }
        $terms = Catalogo_textos::select('texto')->where('nombre', 'terminos_condiciones')->get();
        return view('institutions.showcourseseminar', compact('cursoseminario'));
    }
}
