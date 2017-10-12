<?php

namespace App\Http\Controllers;

use App\PosgradeCourseSeminar;

class ShowPosgradeController extends Controller
{
    public function __invoke($provincename, $cityname, PosgradeCourseSeminar $posgrado, $slug) {

        //abort_unless($post->slug == $slug, 404);
        if($posgrado->slug != $slug) {
            return redirect($posgrado->url, 301);
        }
        return view('institutions.showposgrade', compact('posgrado'));
    }
}
