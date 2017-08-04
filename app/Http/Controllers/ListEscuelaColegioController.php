<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use Illuminate\Http\Request;

class ListEscuelaColegioController extends Controller
{
    public function listEscuelaColegio() {
        $bannerData = BannerCategory::where('category_id','=','3')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        return view('vendor.adminlte.layouts.escuelacolegio', compact('bannerData'));
    }
}
