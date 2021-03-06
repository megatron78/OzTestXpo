<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\{PosgradeCourseSeminar,Province,City,Country,User,Instituciones_ads};
use Yajra\DataTables\DataTables;
use App\Jobs\SendAlertaVentaEmail;
use Illuminate\Auth\Events\Registered;

class CourseSeminarController extends Controller
{
    public function create() {
        $countries = Country::all(['name','id']);
        $provinces = Province::all(['name','id']);
        $cities = null;
        if(!empty(session()->getOldInput('province_id'))) {
            $cities=City::where('province_id', session()->getOldInput('province_id'))
                ->select('name', 'id')
                ->get();
        }
        return view('institutions.createcursoseminario', compact('provinces', 'countries', 'cities'));
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

        if($input['plan'] != '3B') {
            $email=env('MAIL_INFO', 'info@expoeducar.com');
            event(new Registered($cursosem = PosgradeCourseSeminar::create($input)));
            $this->dispatch(new SendAlertaVentaEmail($request->user(), $cursosem, $email));
        }
        else
            $cursosem = PosgradeCourseSeminar::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->route('cursoseminario.edit', [$cursosem->id]);
    }

    public function edit($id) {
        $courseseminar = PosgradeCourseSeminar::findOrFail($id);
        $countries = Country::all(['name','id']);
        $provinces = Province::all(['name','id']);
        $users = User::all(['name','id']);

        $cities = City::where('province_id','=',$courseseminar->province_id)
            ->select('name','id')->get();

        return view('institutions.editcursoseminario',
            compact('countries','provinces', 'cities', 'users'))->withCourseseminar($courseseminar);
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
            //Delete old if necessary
            if(file_exists(public_path($courseseminar->documento_pdf1)) and !empty($courseseminar->documento_pdf1)){
                unlink(public_path($courseseminar->documento_pdf1));
            }
            $fileName = $request->documento_pdf1->store('public/posgrade_pdf');
            $input['documento_pdf1'] = Storage::url($fileName);
        }
        if(isset($request->documento_pdf2)) {
            //Delete old if necessary
            if(file_exists(public_path($courseseminar->documento_pdf2)) and !empty($courseseminar->documento_pdf2)){
                unlink(public_path($courseseminar->documento_pdf2));
            }
            $fileName = $request->documento_pdf2->store('public/posgrade_pdf');
            $input['documento_pdf2'] = Storage::url($fileName);
        }
        if(isset($request->documento_pdf3)) {
            //Delete old if necessary
            if(file_exists(public_path($courseseminar->documento_pdf3)) and !empty($courseseminar->documento_pdf3)){
                unlink(public_path($courseseminar->documento_pdf3));
            }
            $fileName = $request->documento_pdf3->store('public/posgrade_pdf');
            $input['documento_pdf3'] = Storage::url($fileName);
        }

        $courseseminar->fill($input);
        $courseseminar->save();

        $institutionAds = Instituciones_ads::where('object_id', $id)->first();
        if(!empty($institutionAds)) {
            $institutionAds->update(['nombre_corto' => $courseseminar->nombre_corto]);
        }

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
