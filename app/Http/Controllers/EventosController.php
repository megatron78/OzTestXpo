<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use DateTime;
use Illuminate\Http\Request;
use App\{Event,User};

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
        //dd(DateTime::createFromFormat("Y-m-d", $request->fecha_evento)->day);
        //dd(explode('-', $request->fecha_evento)[0]);
        $input['dia_evento'] = explode('-', $request->fecha_evento)[2]; //$request->fecha_evento->day;

        $nmes = explode('-', $request->fecha_evento)[1];
        switch ($nmes) {
            case '01':
                $input['mes_evento'] = 'ENE';
                break;
            case '02':
                $input['mes_evento'] = 'FEB';
                break;
            case '03':
                $input['mes_evento'] = 'MAR';
                break;
            case '04':
                $input['mes_evento'] = 'ABR';
                break;
            case '05':
                $input['mes_evento'] = 'MAY';
                break;
            case '06':
                $input['mes_evento'] = 'JUN';
                break;
            case '07':
                $input['mes_evento'] = 'JUL';
                break;
            case '08':
                $input['mes_evento'] = 'AGO';
                break;
            case '09':
                $input['mes_evento'] = 'SEP';
                break;
            case '10':
                $input['mes_evento'] = 'OCT';
                break;
            case '11':
                $input['mes_evento'] = 'NOV';
                break;
            case '12':
                $input['mes_evento'] = 'DIC';
                break;
        }

        //$input['mes_evento'] = $input['mes_evento'] = date("F", strtotime($request->fecha_evento)); //explode('-', $request->fecha_evento)[1]; //$request->fecha_evento->format('F');
        $input['year_evento'] = explode('-', $request->fecha_evento)[0]; //$request->fecha_evento->year;

        $input['user_id'] = $request->user()->id;

        if($input['plan'] != '3B') {
            $email=env('MAIL_INFO', 'info@expoeducar.com');
            event(new Registered($evento = Event::create($input)));
            $this->dispatch(new SendAlertaVentaEmail($request->user(), $evento, $email));
        }
        else
            $evento = Event::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->route('eventos.edit', [$evento->id]);
    }

    public function edit($id) {
        $evento = Event::findOrFail($id);
        $users = User::all(['name','id']);

        return view('institutions.editevento', compact('users'))->withEvento($evento);
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

        $input['dia_evento'] = explode('-', $request->fecha_evento)[2]; //$request->fecha_evento->day;
        $nmes = explode('-', $request->fecha_evento)[1];
        switch ($nmes) {
            case '01':
                $input['mes_evento'] = 'ENE';
                break;
            case '02':
                $input['mes_evento'] = 'FEB';
                break;
            case '03':
                $input['mes_evento'] = 'MAR';
                break;
            case '04':
                $input['mes_evento'] = 'ABR';
                break;
            case '05':
                $input['mes_evento'] = 'MAY';
                break;
            case '06':
                $input['mes_evento'] = 'JUN';
                break;
            case '07':
                $input['mes_evento'] = 'JUL';
                break;
            case '08':
                $input['mes_evento'] = 'AGO';
                break;
            case '09':
                $input['mes_evento'] = 'SEP';
                break;
            case '10':
                $input['mes_evento'] = 'OCT';
                break;
            case '11':
                $input['mes_evento'] = 'NOV';
                break;
            case '12':
                $input['mes_evento'] = 'DIC';
                break;
        }
        //$input['mes_evento'] = date("F", strtotime($request->fecha_evento)); //explode('-', $request->fecha_evento)[1]; //$request->fecha_evento->format('F');
        $input['year_evento'] = explode('-', $request->fecha_evento)[0]; //$request->fecha_evento->year;

        $evento->fill($input);
        $evento->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
