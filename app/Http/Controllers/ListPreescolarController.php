<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use App\Province;
use Illuminate\Http\Request;

class ListPreescolarController extends Controller
{
    public function listPreescolar() {
        $bannerData = BannerCategory::where('category_id','=','2')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();
        $provinces = Province::all(['name','code']);
        return view('vendor.adminlte.layouts.preescolar', compact('provinces'), compact('bannerData'));
    }
}
