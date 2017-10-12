<?php

namespace App\Http\Controllers;

use App\Institution;

class ShowInstitutionController extends Controller
{
    public function __invoke($provincename, $cityname, Institution $institution, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($institution->slug != $slug) {
            return redirect($institution->url, 301);
        }
        return view('institutions.show', compact('institution'));
    }
}
