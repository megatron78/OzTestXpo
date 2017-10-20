<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\{PosgradeCourseSeminar,Province,City,Country};

class CourseSeminarController extends Controller
{
    public function create() {
        $countries = Country::all(['name','id']);
        $provinces = Province::all(['name','id']);
        return view('institutions.createcursoseminario', compact('provinces', 'countries'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'nombre_corto' => 'required',
            'duracion' => 'required',
            'institucion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'documento_pdf1' => 'nullable|image|mimes:pdf|max:500',
            'documento_pdf2' => 'nullable|image|mimes:pdf|max:500',
            'documento_pdf3' => 'nullable|image|mimes:pdf|max:500',
        ]);

        $input = $request->all();

        if(isset($request->documento_pdf1)) {
            $fileName = $request->documento_pdf1->store('public/posgrade_pdf');
            $input['documento_pdf1'] = Storage::url($fileName);
        }
        if(isset($request->documento_pdf2)) {
            $fileName = $request->documento_pdf2->store('public/posgrade_pdf');
            $input['documento_pdf2'] = Storage::url($fileName);
        }
        if(isset($request->documento_pdf3)) {
            $fileName = $request->documento_pdf3->store('public/posgrade_pdf');
            $input['documento_pdf3'] = Storage::url($fileName);
        }

        $input['user_id'] = $request->user()->id;

        PosgradeCourseSeminar::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->back();
    }

    public function edit($id) {
        $courseseminar = PosgradeCourseSeminar::findOrFail($id);
        $countries = Country::all(['name','id']);
        $provinces = Province::all(['name','id']);

        $cities = City::where('province_id','=',$courseseminar->province_id)
            ->select('name','id')->get();

        return view('institutions.editcursoseminario',
            compact('countries','provinces','cities'))->withCourseseminar($courseseminar);
    }

    public function update($id, Request $request) {
        $courseseminar = PosgradeCourseSeminar::findOrFail($id);

        $this->validate($request, [
            'nombre' => 'required',
            'nombre_corto' => 'required',
            'duracion' => 'required',
            'institucion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'documento_pdf1' => 'nullable|mimes:pdf|max:500',
            'documento_pdf2' => 'nullable|mimes:pdf|max:500',
            'documento_pdf3' => 'nullable|mimes:pdf|max:500',
        ]);

        $input = $request->all();

        if(isset($request->documento_pdf1)) {
            $fileName = $request->documento_pdf1->store('public/posgrade_pdf');
            $input['documento_pdf1'] = Storage::url($fileName);
        }
        if(isset($request->documento_pdf2)) {
            $fileName = $request->documento_pdf2->store('public/posgrade_pdf');
            $input['documento_pdf2'] = Storage::url($fileName);
        }
        if(isset($request->documento_pdf3)) {
            $fileName = $request->documento_pdf3->store('public/posgrade_pdf');
            $input['documento_pdf3'] = Storage::url($fileName);
        }

        $courseseminar->fill($input);
        $courseseminar->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
