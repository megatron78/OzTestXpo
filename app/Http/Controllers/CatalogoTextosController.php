<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogo_textos;
use Illuminate\Support\Facades\Session;

class CatalogoTextosController extends Controller
{
    public function listTerms(Request $request) {
        $terms = Catalogo_textos::select('id', 'nombre', 'texto')->get();

        return view('catalogs.listtermsconds', compact('terms'));
    }

    public function edit($id) {
        $terms = Catalogo_textos::findOrFail($id);

        return view('catalogs.termsconds', compact('terms'));
    }

    public function update($id, Request $request) {
        $terms = Catalogo_textos::findOrFail($id);
        $this->validate($request, [
            'texto' => 'required',
        ]);

        $input = $request->all();

        //$input['updated_at'] = Carbon::now();

        $terms->fill($input);
        $terms->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
