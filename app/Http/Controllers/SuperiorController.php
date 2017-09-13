<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\{Pregrade,Province,Canton,Parish,City,Sector};

class SuperiorController extends Controller
{
    public function create() {
        $provinces = Province::all(['name','id']);
        return view('institutions.createsuperior', compact('provinces'));
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

        if(isset($request->pregrade_bg_picture)) {
            $fileName = $request->pregrade_bg_picture->store('public/pregrade_bg');
            $input['pregrade_bg_picture'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_1)) {
            $fileName = $request->institution_picture_1->store('public/pregrade_pic');
            $input['institution_picture_1'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_2)) {
            $fileName = $request->institution_picture_2->store('public/pregrade_pic');
            $input['institution_picture_2'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_3)) {
            $fileName = $request->institution_picture_3->store('public/pregrade_pic');
            $input['institution_picture_3'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_4)) {
            $fileName = $request->institution_picture_4->store('public/pregrade_pic');
            $input['institution_picture_4'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_5)) {
            $fileName = $request->institution_picture_5->store('public/pregrade_pic');
            $input['institution_picture_5'] = Storage::url($fileName);
        }
        if(isset($request->institution_picture_6)) {
            $fileName = $request->institution_picture_6->store('public/pregrade_pic');
            $input['institution_picture_6'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_1)) {
            $fileName = $request->banner_inst_picture_1->store('public/pregrade_ban');
            $input['banner_inst_picture_1'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_2)) {
            $fileName = $request->banner_inst_picture_2->store('public/pregrade_ban');
            $input['banner_inst_picture_2'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_3)) {
            $fileName = $request->banner_inst_picture_3->store('public/pregrade_ban');
            $input['banner_inst_picture_3'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_4)) {
            $fileName = $request->banner_inst_picture_4->store('public/pregrade_ban');
            $input['banner_inst_picture_4'] = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_5)) {
            $fileName = $request->banner_inst_picture_5->store('public/pregrade_ban');
            $input['banner_inst_picture_5'] = Storage::url($fileName);
        }

        $input['user_id'] = $request->user()->id;

        Pregrade::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->back();
    }

    public function edit($id) {
        $pregrade = Pregrade::findOrFail($id);
        $provinces = Province::all(['name','id']);
        $cantons = Canton::where('province_id','=',$pregrade->province_id)
            ->select('name','id')->get();
        $parishes = Parish::where('canton_id','=',$pregrade->canton_id)
            ->select('name','id')->get();
        $cities = City::where('province_id','=',$pregrade->province_id)
            ->select('name','id')->get();
        $sectors = Sector::where('city_id','=',$pregrade->city_id)
            ->select('nombre','id')->get();

        return view('institutions.editsuperior',
            compact('provinces','cantons','parishes','cities','sectors'))->withPregrade($pregrade);
    }

    public function update($id, Request $request) {
        $pregrade = Pregrade::findOrFail($id);

        $this->validate($request, [
            'nombre' => 'required',
            'pregrade_bg_picture' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
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
        $pregrade->fill($input);

        if(isset($request->pregrade_bg_picture)) {
            $fileName = $request->pregrade_bg_picture->store('public/pregrade_bg');
            $pregrade->pregrade_bg_picture = Storage::url($fileName);
        }
        if(isset($request->institution_picture_1)) {
            $fileName = $request->institution_picture_1->store('public/pregrade_pic');
            $pregrade->institution_picture_1 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_2)) {
            $fileName = $request->institution_picture_2->store('public/pregrade_pic');
            $pregrade->institution_picture_2 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_3)) {
            $fileName = $request->institution_picture_3->store('public/pregrade_pic');
            $pregrade->institution_picture_3 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_4)) {
            $fileName = $request->institution_picture_4->store('public/pregrade_pic');
            $pregrade->institution_picture_4 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_5)) {
            $fileName = $request->institution_picture_5->store('public/pregrade_pic');
            $pregrade->institution_picture_5 = Storage::url($fileName);
        }
        if(isset($request->institution_picture_6)) {
            $fileName = $request->institution_picture_6->store('public/pregrade_pic');
            $pregrade->institution_picture_6 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_1)) {
            $fileName = $request->banner_inst_picture_1->store('public/pregrade_ban');
            $pregrade->banner_inst_picture_1 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_2)) {
            $fileName = $request->banner_inst_picture_2->store('public/pregrade_ban');
            $pregrade->banner_inst_picture_2 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_3)) {
            $fileName = $request->banner_inst_picture_3->store('public/pregrade_ban');
            $pregrade->banner_inst_picture_3 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_4)) {
            $fileName = $request->banner_inst_picture_4->store('public/pregrade_ban');
            $pregrade->banner_inst_picture_3 = Storage::url($fileName);
        }
        if(isset($request->banner_inst_picture_5)) {
            $fileName = $request->banner_inst_picture_5->store('public/pregrade_ban');
            $pregrade->banner_inst_picture_5 = Storage::url($fileName);
        }
        $pregrade->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
