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
            'informacion' => 'required',
            'costo' => 'required',
            'fecha_evento' => 'required',
            'hora_evento' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
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

        $input['user_id'] = $request->user()->id;

        if($input['plan'] != '3B') {
            $email=env('MAIL_INFO', 'info@expoeducar.com');
            event(new Registered($evento = Event::create($input)));
            $this->dispatch(new SendAlertaVentaEmail($request->user(), $evento, $email));
        }
        else
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
            'informacion' => 'required',
            'costo' => 'required',
            'fecha_evento' => 'required',
            'hora_evento' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'evento_bg_picture' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
        ]);

        $input = $request->all();

        if(isset($request->evento_bg_picture)) {
            //Delete old if necessary
            if(file_exists(public_path($evento->evento_bg_picture)) and !empty($evento->evento_bg_picture)){
                unlink(public_path($evento->evento_bg_picture));
            }
            $fileName = $request->evento_bg_picture->store('public/event_pic');
            $input['evento_bg_picture'] = Storage::url($fileName);
        }

        $input['user_id'] = $request->user()->id;
        $input['dia_evento'] = $request->fecha_evento->day;
        $input['mes_evento'] = $request->fecha_evento->format('F');
        $input['year_evento'] = $request->fecha_evento->year;

        $evento->fill($input);
        $evento->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
