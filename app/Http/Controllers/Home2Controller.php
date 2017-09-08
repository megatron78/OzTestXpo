<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\{
    BannerCategory, Instituciones_ad, InstitutionsView
};
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class Home2Controller extends Controller
{
    public function showHome() {
        /*$instituciones_ad = Instituciones_ad::where('fecha_fin', '>=', Carbon::now())
            ->orderBy('orden_presentacion')
            ->get();

        $inst_plucked = $instituciones_ad->pluck('object_id');

        $instituciones_view = InstitutionsView::where('activo', '=', 1)
            ->where('plan_hasta', '>=', Carbon::now())
            ->whereIn('id', $inst_plucked->all())
            ->get();*/

        $instituciones_view = InstitutionsView::whereIn('id', function($query) {
            $query->select('object_id')
            ->from(with(new Instituciones_ad)->getTable())
                ->where('fecha_fin', '>=', Carbon::now())
                ->orderBy('orden_presentacion');
        })->get();

        $bannerData = BannerCategory::where('category_id','=','1')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url')
            ->get();

        return view('welcome', compact('bannerData', 'instituciones_view'));
    }
}
