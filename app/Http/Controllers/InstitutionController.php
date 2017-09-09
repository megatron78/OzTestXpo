<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;

class InstitutionController extends Controller
{
    public function edit($id) {
        $institution = Institution::findOrFail($id);
        return view('institutions.editinstitution')->withInstitution($institution);
        //return view('institutions.editinstitution', ['institution' => $institution]);
    }

    public function update($id, Request $request) {
        $institution = Institution::findOrFail($id);

        $this->validate($request, [
           'nombre' => 'required',
        ]);

        dd($request);
        $input = $request->all();
    }
}
