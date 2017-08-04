<?php

namespace App\Http\Controllers;

use App\BannerCategory;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class Home2Controller extends Controller
{
    public function showHome() {
        $bannerData = BannerCategory::where('category_id','=','1')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();
        return view('welcome', compact('bannerData'));
    }
}
