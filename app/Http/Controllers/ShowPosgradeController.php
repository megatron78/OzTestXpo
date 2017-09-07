<?php

namespace App\Http\Controllers;

use App\PosgradeCourseSeminar;

class ShowPosgradeController extends Controller
{
    public function __invoke(PosgradeCourseSeminar $posgrade, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($posgrade->slug != $slug) {
            return redirect($posgrade->url, 301);
        }
        return view('institutions.showposgrade', compact('posgrade'));
    }
}
