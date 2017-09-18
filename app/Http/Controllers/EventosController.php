<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\{Event};

class EventosController extends Controller
{
    public function create() {
        return view('institutions.createevento');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'evento_bg_picture' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
        ]);

        $input = $request->all();

        if(isset($request->evento_bg_picture)) {
            $fileName = $request->evento_bg_picture->store('public/event_pic');
            $input['evento_bg_picture'] = Storage::url($fileName);
        }

        $input['user_id'] = $request->user()->id;
        $input['dia_evento'] = $request->fecha_evento->day;
        $input['mes_evento'] = $request->fecha_evento->format('F');
        $input['year_evento'] = $request->fecha_evento->year;

        Event::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->back();
    }

    public function edit($id) {
        $evento = Event::findOrFail($id);

        return view('institutions.editevento')->withEvento($evento);
    }

    public function update($id, Request $request) {
        $evento = Event::findOrFail($id);

        $this->validate($request, [
            'nombre' => 'required',
            'evento_bg_picture' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
        ]);

        $input = $request->all();

        if(isset($request->evento_bg_picture)) {
            $fileName = $request->evento_bg_picture->store('public/event_pic');
            $input['evento_bg_picture'] = Storage::url($fileName);
        }

        $evento->fill($input);
        $evento->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
