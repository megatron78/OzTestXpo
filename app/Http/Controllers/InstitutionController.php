<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Institution,InstitutionsView,Province,Canton,Parish,City,Sector};
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use App\Jobs\SendAlertaVentaEmail;
use Illuminate\Auth\Events\Registered;

class InstitutionController extends Controller
{
    //List for activations
    public function activationList() {
        return view('vendor.adminlte.activations');
    }

    protected function getActivations() {
        $instituciones = InstitutionsView::where('activo', '=', 0)
            ->select('id'
                ,'activo'
                ,'tipo'
                ,'clasificacion'
                ,'plan'
                ,'nombre'
                ,'institution_bg_picture'
                ,'institution'
                ,'nombre_corto'
                ,'slug'
                ,'carreras'
                ,'masculino'
                ,'femenino'
                ,'mixto'
                ,'preescolar'
                ,'escuela'
                ,'colegio'
                ,'province_id'
                ,'city_id'
                ,'sector_id'
                ,'user_id'
                ,'costo'
                ,'fecha_evento'
                ,'hora_evento'
                ,'objetivo'
                ,'duracion'
                ,'fecha_inicio'
                ,'presencial'
                ,'semipresencial'
                ,'distancia'
                ,'direccion'
                ,'telefono'
                ,'celular'
                ,'email'
                ,'web'
                ,'facebook'
                ,'twitter'
                ,'linkedin'
                ,'province_name'
                ,'city_name'
                ,'sector_name'
                ,'plan_desde'
                ,'plan_hasta')
            ->orderBy('plan')
            ->orderBy('nombre');

        return DataTables::of($instituciones)->make(true);
    }

    //Preescolar
    public function createPreescolar() {
        $provinces = Province::all(['name','id']);
        return view('institutions.createpreescolar', compact('provinces'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'institution_bg_picture' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_1' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_2' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_3' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_4' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_5' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_6' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_1' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_2' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_3' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_4' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_5' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
        ]);

        $input = $request->all();

        if(isset($request->institution_bg_picture)) {
            $fileName = $request->institution_bg_picture->store('public/institution_bg');
            $input['institution_bg_picture'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_1)) {
            $fileName = $request->institution_picture_1->store('public/institution_pic');
            $input['institution_picture_1'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_2)) {
            $fileName = $request->institution_picture_2->store('public/institution_pic');
            $input['institution_picture_2'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_3)) {
            $fileName = $request->institution_picture_3->store('public/institution_pic');
            $input['institution_picture_3'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_4)) {
            $fileName = $request->institution_picture_4->store('public/institution_pic');
            $input['institution_picture_4'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_5)) {
            $fileName = $request->institution_picture_5->store('public/institution_pic');
            $input['institution_picture_5'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_6)) {
            $fileName = $request->institution_picture_6->store('public/institution_pic');
            $input['institution_picture_6'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_1)) {
            $fileName = $request->banner_inst_picture_1->store('public/institution_ban');
            $input['banner_inst_picture_1'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_2)) {
            $fileName = $request->banner_inst_picture_2->store('public/institution_ban');
            $input['banner_inst_picture_2'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_3)) {
            $fileName = $request->banner_inst_picture_3->store('public/institution_ban');
            $input['banner_inst_picture_3'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_4)) {
            $fileName = $request->banner_inst_picture_4->store('public/institution_ban');
            $input['banner_inst_picture_4'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_5)) {
            $fileName = $request->banner_inst_picture_5->store('public/institution_ban');
            $input['banner_inst_picture_5'] = Storage::url($fileName);
        }

        $input['user_id'] = $request->user()->id;

        if($input['plan'] != '3B') {
            $input['activo'] = 0;
        }

        if($input['plan'] != '3B') {
            event(new Registered($institution = $this->create($input)));
            $this->dispatch(new SendAlertaVentaEmail($request->user(), $institution));
        }
        else
            Institution::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->back();
    }

    public function edit($id) {
        $institution = Institution::findOrFail($id);
        $provinces = Province::all(['name','id']);
        $cantons = Canton::where('province_id','=',$institution->province_id)
                    ->select('name','id')->get();
        $parishes = Parish::where('canton_id','=',$institution->canton_id)
                    ->select('name','id')->get();
        $cities = City::where('province_id','=',$institution->province_id)
                    ->select('name','id')->get();
        $sectors = Sector::where('city_id','=',$institution->city_id)
                    ->select('nombre','id')->get();

        return view('institutions.editinstitution',
            compact('provinces','cantons','parishes','cities','sectors'))->withInstitution($institution);
    }

    public function update($id, Request $request) {
        $institution = Institution::findOrFail($id);

        $this->validate($request, [
            'nombre' => 'required',
            'institution_bg_picture' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_1' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_2' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_3' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_4' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_5' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_6' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_1' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_2' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_3' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_4' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_5' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
        ]);

        $input = $request->all();
        $institution->fill($input);

        if(isset($request->institution_bg_picture)) {
            $fileName = $request->institution_bg_picture->store('public/institution_bg');
            $institution->institution_bg_picture = Storage::url($fileName);
        }
        if(isset($request->institution_picture_1)) {
            $fileName = $request->institution_picture_1->store('public/institution_pic');
            $institution->institution_picture_1 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_2)) {
            $fileName = $request->institution_picture_2->store('public/institution_pic');
            $institution->institution_picture_2 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_3)) {
            $fileName = $request->institution_picture_3->store('public/institution_pic');
            $institution->institution_picture_3 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_4)) {
            $fileName = $request->institution_picture_4->store('public/institution_pic');
            $institution->institution_picture_4 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_5)) {
            $fileName = $request->institution_picture_5->store('public/institution_pic');
            $institution->institution_picture_5 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_6)) {
            $fileName = $request->institution_picture_6->store('public/institution_pic');
            $institution->institution_picture_6 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_1)) {
            $fileName = $request->banner_inst_picture_1->store('public/institution_ban');
            $institution->banner_inst_picture_1 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_2)) {
            $fileName = $request->banner_inst_picture_2->store('public/institution_ban');
            $institution->banner_inst_picture_2 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_3)) {
            $fileName = $request->banner_inst_picture_3->store('public/institution_ban');
            $institution->banner_inst_picture_3 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_4)) {
            $fileName = $request->banner_inst_picture_4->store('public/institution_ban');
            $institution->banner_inst_picture_3 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_5)) {
            $fileName = $request->banner_inst_picture_5->store('public/institution_ban');
            $institution->banner_inst_picture_5 = Storage::url($fileName);
        }
        $institution->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }

    //Escuela Colegio
    public function createEscuelacolegio() {
        $provinces = Province::all(['name','id']);
        return view('institutions.createescuelacolegio', compact('provinces'));
    }

    public function storeEscuelacolegio(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'institution_bg_picture' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_1' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_2' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_3' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_4' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_5' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_6' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_1' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_2' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_3' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_4' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_5' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
        ]);

        $input = $request->all();

        if(isset($request->institution_bg_picture)) {
            $fileName = $request->institution_bg_picture->store('public/institution_bg');
            $input['institution_bg_picture'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_1)) {
            $fileName = $request->institution_picture_1->store('public/institution_pic');
            $input['institution_picture_1'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_2)) {
            $fileName = $request->institution_picture_2->store('public/institution_pic');
            $input['institution_picture_2'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_3)) {
            $fileName = $request->institution_picture_3->store('public/institution_pic');
            $input['institution_picture_3'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_4)) {
            $fileName = $request->institution_picture_4->store('public/institution_pic');
            $input['institution_picture_4'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_5)) {
            $fileName = $request->institution_picture_5->store('public/institution_pic');
            $input['institution_picture_5'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_6)) {
            $fileName = $request->institution_picture_6->store('public/institution_pic');
            $input['institution_picture_6'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_1)) {
            $fileName = $request->banner_inst_picture_1->store('public/institution_ban');
            $input['banner_inst_picture_1'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_2)) {
            $fileName = $request->banner_inst_picture_2->store('public/institution_ban');
            $input['banner_inst_picture_2'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_3)) {
            $fileName = $request->banner_inst_picture_3->store('public/institution_ban');
            $input['banner_inst_picture_3'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_4)) {
            $fileName = $request->banner_inst_picture_4->store('public/institution_ban');
            $input['banner_inst_picture_4'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_5)) {
            $fileName = $request->banner_inst_picture_5->store('public/institution_ban');
            $input['banner_inst_picture_5'] = Storage::url($fileName);
        }

        $input['user_id'] = $request->user()->id;

        Institution::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->back();
    }

    public function editEscuelacolegio($id) {
        $institution = Institution::findOrFail($id);
        $provinces = Province::all(['name','id']);
        $cantons = Canton::where('province_id','=',$institution->province_id)
            ->select('name','id')->get();
        $parishes = Parish::where('canton_id','=',$institution->canton_id)
            ->select('name','id')->get();
        $cities = City::where('province_id','=',$institution->province_id)
            ->select('name','id')->get();
        $sectors = Sector::where('city_id','=',$institution->city_id)
            ->select('nombre','id')->get();

        return view('institutions.editescuelacolegio',
            compact('provinces','cantons','parishes','cities','sectors'))->withInstitution($institution);
    }

    public function updateEscuelacolegio($id, Request $request) {
        $institution = Institution::findOrFail($id);

        $this->validate($request, [
            'nombre' => 'required',
            'institution_bg_picture' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_1' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_2' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_3' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_4' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_5' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'institution_picture_6' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_1' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_2' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_3' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_4' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'banner_inst_picture_5' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
        ]);

        $input = $request->all();
        $institution->fill($input);

        if(isset($request->institution_bg_picture)) {
            $fileName = $request->institution_bg_picture->store('public/institution_bg');
            $institution->institution_bg_picture = Storage::url($fileName);
        }
        if(isset($request->institution_picture_1)) {
            $fileName = $request->institution_picture_1->store('public/institution_pic');
            $institution->institution_picture_1 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_2)) {
            $fileName = $request->institution_picture_2->store('public/institution_pic');
            $institution->institution_picture_2 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_3)) {
            $fileName = $request->institution_picture_3->store('public/institution_pic');
            $institution->institution_picture_3 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_4)) {
            $fileName = $request->institution_picture_4->store('public/institution_pic');
            $institution->institution_picture_4 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_5)) {
            $fileName = $request->institution_picture_5->store('public/institution_pic');
            $institution->institution_picture_5 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_6)) {
            $fileName = $request->institution_picture_6->store('public/institution_pic');
            $institution->institution_picture_6 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_1)) {
            $fileName = $request->banner_inst_picture_1->store('public/institution_ban');
            $institution->banner_inst_picture_1 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_2)) {
            $fileName = $request->banner_inst_picture_2->store('public/institution_ban');
            $institution->banner_inst_picture_2 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_3)) {
            $fileName = $request->banner_inst_picture_3->store('public/institution_ban');
            $institution->banner_inst_picture_3 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_4)) {
            $fileName = $request->banner_inst_picture_4->store('public/institution_ban');
            $institution->banner_inst_picture_3 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_5)) {
            $fileName = $request->banner_inst_picture_5->store('public/institution_ban');
            $institution->banner_inst_picture_5 = Storage::url($fileName);
        }
        $institution->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
