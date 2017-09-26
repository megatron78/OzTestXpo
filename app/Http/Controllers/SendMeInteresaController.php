<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMoreInfoEmail;
use Illuminate\Support\Facades\Session;

class SendMeInteresaController extends Controller
{
    public function sendMeInteresa(Request $request) {
        $this->validate($request, [
            'nombreApellido' => 'required',
            'telefono' => 'required',
            'inputEmail3' => 'required',
            'whatsapp' => 'nullable',
            'interes' => 'nullable',
        ]);

        $input = $request->all();

        $this->dispatch(new SendMoreInfoEmail($input));

        Session::flash('flash_message', 'Se mensaje fue enviado satisfactoriamente.');

        return redirect()->back();
    }
}
