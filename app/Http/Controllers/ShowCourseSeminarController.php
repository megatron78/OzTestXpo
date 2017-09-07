<?php

namespace App\Http\Controllers;

use App\PosgradeCourseSeminar;

class ShowCourseSeminarController extends Controller
{
    public function __invoke(PosgradeCourseSeminar $courseseminar, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($courseseminar->slug != $slug) {
            return redirect($courseseminar->url, 301);
        }
        return view('institutions.showcourseseminar', compact('courseseminar'));
    }
}
