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
        //TODO: Eventos no tiene página de detalle, url direcciona al propio url del evento
        return view('vendor.adminlte.layouts.eventos.', compact('event'));
    }
}
