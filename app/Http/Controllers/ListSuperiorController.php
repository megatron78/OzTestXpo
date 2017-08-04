<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use Illuminate\Http\Request;

class ListSuperiorController extends Controller
{
    public function listSuperior() {
        $bannerData = BannerCategory::where('category_id','=','4')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        return view('vendor.adminlte.layouts.superior', compact('bannerData'));
    }
}
