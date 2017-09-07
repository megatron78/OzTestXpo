<?php

namespace App\Http\Controllers;

use App\Event;

class ShowEventController extends Controller
{
    public function __invoke(Event $event, $slug) {
        //abort_unless($post->slug == $slug, 404);
        if($event->slug != $slug) {
            return redirect($event->url, 301);
        }
        return view('institutions.', compact('event'));
    }
}
