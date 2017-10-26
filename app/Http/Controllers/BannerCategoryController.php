<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BannerCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class BannerCategoryController extends Controller
{
    public function listBanners(Request $request) {
        $banners = BannerCategory::select('id', 'category_id', 'photo1_url', 'photo2_url', 'photo3_url',
            'photo4_url', 'photo5_url')->get();

        return view('catalogs.banners', compact('banners'));
    }

    public function edit($id) {
        $banner = BannerCategory::findOrfail($id);

        return view('catalogs.editbanner', compact('banner'));
    }

    public function update($id, Request $request) {
        $banner = BannerCategory::findOrFail($id);

        $this->validate($request, [
            'photo1_url' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'photo2_url' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'photo3_url' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'photo4_url' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
            'photo5_url' => 'nullable|image|mimes:jpeg,bmp,png|max:500',
        ]);

        $input = $request->all();

        if($banner->category_id == 1) {
            if (isset($request->photo1_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo1_url)) and !empty($banner->photo1_url)){
                    unlink(public_path($banner->photo1_url));
                }
                $fileName = $request->photo1_url->store('public/principal_banner');
                $input['photo1_url'] = Storage::url($fileName);
            }
            if (isset($request->photo2_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo2_url)) and !empty($banner->photo2_url)){
                    unlink(public_path($banner->photo2_url));
                }
                $fileName = $request->photo2_url->store('public/principal_banner');
                $input['photo2_url'] = Storage::url($fileName);
            }
            if (isset($request->photo3_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo3_url)) and !empty($banner->photo3_url)){
                    unlink(public_path($banner->photo2_url));
                }
                $fileName = $request->photo3_url->store('public/principal_banner');
                $input['photo3_url'] = Storage::url($fileName);
            }
            if (isset($request->photo4_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo4_url)) and !empty($banner->photo4_url)){
                    unlink(public_path($banner->photo4_url));
                }
                $fileName = $request->photo4_url->store('public/principal_banner');
                $input['photo4_url'] = Storage::url($fileName);
            }
            if (isset($request->photo5_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo5_url)) and !empty($banner->photo5_url)){
                    unlink(public_path($banner->photo5_url));
                }
                $fileName = $request->photo5_url->store('public/principal_banner');
                $input['photo5_url'] = Storage::url($fileName);
            }
        }

        if($banner->category_id == 2) {
            if (isset($request->photo1_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo1_url)) and !empty($banner->photo1_url)){
                    unlink(public_path($banner->photo1_url));
                }
                $fileName = $request->photo1_url->store('public/preescolar_banner');
                $input['photo1_url'] = Storage::url($fileName);
            }
            if (isset($request->photo2_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo2_url)) and !empty($banner->photo2_url)){
                    unlink(public_path($banner->photo2_url));
                }
                $fileName = $request->photo2_url->store('public/preescolar_banner');
                $input['photo2_url'] = Storage::url($fileName);
            }
            if (isset($request->photo3_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo3_url)) and !empty($banner->photo3_url)){
                    unlink(public_path($banner->photo3_url));
                }
                $fileName = $request->photo3_url->store('public/preescolar_banner');
                $input['photo3_url'] = Storage::url($fileName);
            }
            if (isset($request->photo4_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo4_url)) and !empty($banner->photo4_url)){
                    unlink(public_path($banner->photo4_url));
                }
                $fileName = $request->photo4_url->store('public/preescolar_banner');
                $input['photo4_url'] = Storage::url($fileName);
            }
            if (isset($request->photo5_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo5_url)) and !empty($banner->photo5_url)){
                    unlink(public_path($banner->photo5_url));
                }
                $fileName = $request->photo5_url->store('public/preescolar_banner');
                $input['photo5_url'] = Storage::url($fileName);
            }
        }

        if($banner->category_id == 3) {
            if (isset($request->photo1_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo1_url)) and !empty($banner->photo1_url)){
                    unlink(public_path($banner->photo1_url));
                }
                $fileName = $request->photo1_url->store('public/escuelacolegio_banner');
                $input['photo1_url'] = Storage::url($fileName);
            }
            if (isset($request->photo2_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo2_url)) and !empty($banner->photo2_url)){
                    unlink(public_path($banner->photo2_url));
                }
                $fileName = $request->photo2_url->store('public/escuelacolegio_banner');
                $input['photo2_url'] = Storage::url($fileName);
            }
            if (isset($request->photo3_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo3_url)) and !empty($banner->photo3_url)){
                    unlink(public_path($banner->photo3_url));
                }
                $fileName = $request->photo3_url->store('public/escuelacolegio_banner');
                $input['photo3_url'] = Storage::url($fileName);
            }
            if (isset($request->photo4_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo4_url)) and !empty($banner->photo4_url)){
                    unlink(public_path($banner->photo4_url));
                }
                $fileName = $request->photo4_url->store('public/escuelacolegio_banner');
                $input['photo4_url'] = Storage::url($fileName);
            }
            if (isset($request->photo5_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo5_url)) and !empty($banner->photo5_url)){
                    unlink(public_path($banner->photo5_url));
                }
                $fileName = $request->photo5_url->store('public/escuelacolegio_banner');
                $input['photo5_url'] = Storage::url($fileName);
            }
        }

        if($banner->category_id == 4) {
            if (isset($request->photo1_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo1_url)) and !empty($banner->photo1_url)){
                    unlink(public_path($banner->photo1_url));
                }
                $fileName = $request->photo1_url->store('public/superior_banner');
                $input['photo1_url'] = Storage::url($fileName);
            }
            if (isset($request->photo2_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo2_url)) and !empty($banner->photo2_url)){
                    unlink(public_path($banner->photo2_url));
                }
                $fileName = $request->photo2_url->store('public/superior_banner');
                $input['photo2_url'] = Storage::url($fileName);
            }
            if (isset($request->photo3_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo3_url)) and !empty($banner->photo3_url)){
                    unlink(public_path($banner->photo3_url));
                }
                $fileName = $request->photo3_url->store('public/superior_banner');
                $input['photo3_url'] = Storage::url($fileName);
            }
            if (isset($request->photo4_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo4_url)) and !empty($banner->photo4_url)){
                    unlink(public_path($banner->photo4_url));
                }
                $fileName = $request->photo4_url->store('public/superior_banner');
                $input['photo4_url'] = Storage::url($fileName);
            }
            if (isset($request->photo5_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo5_url)) and !empty($banner->evento_bg_picture)){
                    unlink(public_path($banner->photo5_url));
                }
                $fileName = $request->photo5_url->store('public/superior_banner');
                $input['photo5_url'] = Storage::url($fileName);
            }
        }

        if($banner->category_id == 5) {
            if (isset($request->photo1_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo1_url)) and !empty($banner->photo1_url)){
                    unlink(public_path($banner->photo1_url));
                }
                $fileName = $request->photo1_url->store('public/posgrados_banner');
                $input['photo1_url'] = Storage::url($fileName);
            }
            if (isset($request->photo2_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo2_url)) and !empty($banner->photo2_url)){
                    unlink(public_path($banner->photo2_url));
                }
                $fileName = $request->photo2_url->store('public/posgrados_banner');
                $input['photo2_url'] = Storage::url($fileName);
            }
            if (isset($request->photo3_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo3_url)) and !empty($banner->photo3_url)){
                    unlink(public_path($banner->photo3_url));
                }
                $fileName = $request->photo3_url->store('public/posgrados_banner');
                $input['photo3_url'] = Storage::url($fileName);
            }
            if (isset($request->photo4_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo4_url)) and !empty($banner->photo4_url)){
                    unlink(public_path($banner->photo4_url));
                }
                $fileName = $request->photo4_url->store('public/posgrados_banner');
                $input['photo4_url'] = Storage::url($fileName);
            }
            if (isset($request->photo5_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo5_url)) and !empty($banner->photo5_url)){
                    unlink(public_path($banner->photo5_url));
                }
                $fileName = $request->photo5_url->store('public/posgrados_banner');
                $input['photo5_url'] = Storage::url($fileName);
            }
        }

        if($banner->category_id == 6) {
            if (isset($request->photo1_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo1_url)) and !empty($banner->photo1_url)){
                    unlink(public_path($banner->photo1_url));
                }
                $fileName = $request->photo1_url->store('public/cursos_banner');
                $input['photo1_url'] = Storage::url($fileName);
            }
            if (isset($request->photo2_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo2_url)) and !empty($banner->photo2_url)){
                    unlink(public_path($banner->photo2_url));
                }
                $fileName = $request->photo2_url->store('public/cursos_banner');
                $input['photo2_url'] = Storage::url($fileName);
            }
            if (isset($request->photo3_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo3_url)) and !empty($banner->photo3_url)){
                    unlink(public_path($banner->photo3_url));
                }
                $fileName = $request->photo3_url->store('public/cursos_banner');
                $input['photo3_url'] = Storage::url($fileName);
            }
            if (isset($request->photo4_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo4_url)) and !empty($banner->photo4_url)){
                    unlink(public_path($banner->photo4_url));
                }
                $fileName = $request->photo4_url->store('public/cursos_banner');
                $input['photo4_url'] = Storage::url($fileName);
            }
            if (isset($request->photo5_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo5_url)) and !empty($banner->photo5_url)){
                    unlink(public_path($banner->photo5_url));
                }
                $fileName = $request->photo5_url->store('public/cursos_banner');
                $input['photo5_url'] = Storage::url($fileName);
            }
        }

        if($banner->category_id == 7) {
            if (isset($request->photo1_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo1_url)) and !empty($banner->photo1_url)){
                    unlink(public_path($banner->photo1_url));
                }
                $fileName = $request->photo1_url->store('public/eventos_banner');
                $input['photo1_url'] = Storage::url($fileName);
            }
            if (isset($request->photo2_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo2_url)) and !empty($banner->photo2_url)){
                    unlink(public_path($banner->photo2_url));
                }
                $fileName = $request->photo2_url->store('public/eventos_banner');
                $input['photo2_url'] = Storage::url($fileName);
            }
            if (isset($request->photo3_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo3_url)) and !empty($banner->photo3_url)){
                    unlink(public_path($banner->photo3_url));
                }
                $fileName = $request->photo3_url->store('public/eventos_banner');
                $input['photo3_url'] = Storage::url($fileName);
            }
            if (isset($request->photo4_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo4_url)) and !empty($banner->photo4_url)){
                    unlink(public_path($banner->photo4_url));
                }
                $fileName = $request->photo4_url->store('public/eventos_banner');
                $input['photo4_url'] = Storage::url($fileName);
            }
            if (isset($request->photo5_url)) {
                //Delete old images if necessary
                if(file_exists(public_path($banner->photo5_url)) and !empty($banner->photo5_url)){
                    unlink(public_path($banner->photo5_url));
                }
                $fileName = $request->photo5_url->store('public/eventos_banner');
                $input['photo5_url'] = Storage::url($fileName);
            }
        }

        $input['updated_at'] = Carbon::now();

        $banner->fill($input);
        $banner->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
