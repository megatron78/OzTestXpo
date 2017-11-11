<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\{Pregrade,Province,User,City};

class SuperiorController extends Controller
{
    public function create() {
        $provinces = Province::all(['name','id']);
        $users = User::all(['name','id']);
        $cities = null;
        if(!empty(session()->getOldInput('province_id'))) {
            $cities=City::where('province_id', session()->getOldInput('province_id'))
                ->select('name', 'id')
                ->get();
        }
        return view('institutions.createsuperior', compact('provinces', 'cities', 'users'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'nombre_corto' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
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

        if($input['plan'] != '3B') {
            $input['activo'] = 0;
        }

        if($input['plan'] != '3B') {
            $email=config('MAIL_INFO');
            event(new Registered($pregrade = Pregrade::create($input)));
            $this->dispatch(new SendAlertaVentaEmail($request->user(), $pregrade, $email));
        }
        else
            Pregrade::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->back();
    }

    public function edit($id) {
        $pregrade = Pregrade::findOrFail($id);
        $provinces = Province::all(['name','id']);
        $cities = City::where('province_id','=',$pregrade->province_id)
            ->select('name','id')->get();
        $users = User::all(['name','id']);
        return view('institutions.editsuperior',
            compact('provinces','cities','users'))->withPregrade($pregrade);
    }

    public function update($id, Request $request) {
        $pregrade = Pregrade::findOrFail($id);

        $this->validate($request, [
            'nombre' => 'required',
            'nombre_corto' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
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

        //Delete old images if necessary
        if(isset($request->pregrade_bg_picture)) {
            if(file_exists(public_path($pregrade->pregrade_bg_picture)) and !empty($pregrade->pregrade_bg_picture)){
                unlink(public_path($pregrade->pregrade_bg_picture));
            }
        }
        if(isset($request->institution_picture_1)) {
            if(file_exists(public_path($pregrade->institution_picture_1)) and !empty($pregrade->institution_picture_1)){
                unlink(public_path($pregrade->institution_picture_1));
            }
        }
        if(isset($request->institution_picture_2)) {
            if(file_exists(public_path($pregrade->institution_picture_2)) and !empty($pregrade->institution_picture_2)){
                unlink(public_path($pregrade->institution_picture_2));
            }
        }
        if(isset($request->institution_picture_3)) {
            if(file_exists(public_path($pregrade->institution_picture_3)) and !empty($pregrade->institution_picture_3)){
                unlink(public_path($pregrade->institution_picture_3));
            }
        }
        if(isset($request->institution_picture_4)) {
            if(file_exists(public_path($pregrade->institution_picture_4)) and !empty($pregrade->institution_picture_4)){
                unlink(public_path($pregrade->institution_picture_4));
            }
        }
        if(isset($request->institution_picture_5)) {
            if(file_exists(public_path($pregrade->institution_picture_5)) and !empty($pregrade->institution_picture_5)){
                unlink(public_path($pregrade->institution_picture_5));
            }
        }
        if(isset($request->institution_picture_6)) {
            if(file_exists(public_path($pregrade->institution_picture_6)) and !empty($pregrade->institution_picture_6)){
                unlink(public_path($pregrade->institution_picture_6));
            }
        }
        if(isset($request->banner_inst_picture_1)) {
            if(file_exists(public_path($pregrade->banner_inst_picture_1)) and !empty($pregrade->banner_inst_picture_1)){
                unlink(public_path($pregrade->banner_inst_picture_1));
            }
        }
        if(isset($request->banner_inst_picture_2)) {
            if(file_exists(public_path($pregrade->banner_inst_picture_2)) and !empty($pregrade->banner_inst_picture_2)){
                unlink(public_path($pregrade->banner_inst_picture_2));
            }
        }
        if(isset($request->banner_inst_picture_3)) {
            if(file_exists(public_path($pregrade->banner_inst_picture_3)) and !empty($pregrade->banner_inst_picture_3)){
                unlink(public_path($pregrade->banner_inst_picture_3));
            }
        }
        if(isset($request->banner_inst_picture_4)) {
            if(file_exists(public_path($pregrade->banner_inst_picture_4)) and !empty($pregrade->banner_inst_picture_4)){
                unlink(public_path($pregrade->banner_inst_picture_4));
            }
        }
        if(isset($request->banner_inst_picture_5)) {
            if(file_exists(public_path($pregrade->banner_inst_picture_5)) and !empty($pregrade->banner_inst_picture_5)){
                unlink(public_path($pregrade->banner_inst_picture_5));
            }
        }

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
