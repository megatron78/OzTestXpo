<?php

namespace App\Http\Controllers;

use App\Pregrade;

class ShowSuperiorController extends Controller
{
    public function __invoke($provincename, $cityname, Pregrade $pregrade, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($pregrade->slug != $slug) {
            return redirect($pregrade->url, 301);
        }
        return view('institutions.showpregrade', compact('pregrade'));
    }
}
