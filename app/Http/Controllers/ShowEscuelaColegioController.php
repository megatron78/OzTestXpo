<?php

namespace App\Http\Controllers;

use App\Institution;

class ShowEscuelaColegioController extends Controller
{
    public function __invoke(Institution $institution, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($institution->slug != $slug) {
            return redirect($institution->url, 301);
        }
        return view('institutions.showegbbgu', compact('institution'));
    }
}
