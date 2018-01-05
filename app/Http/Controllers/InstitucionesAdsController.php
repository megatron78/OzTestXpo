<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Instituciones_ads, InstitutionsView};
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class InstitucionesAdsController extends Controller
{
    public function getAds(Request $request) {
        $ads = Instituciones_ads::select('id', 'nombre_corto', 'orden_presentacion', 'categoria', 'object_id',
            'fecha_inicio', 'fecha_fin')
            ->where('fecha_fin', '>', Carbon::now())
            ->orderBy('orden_presentacion');

        return DataTables::of($ads)->make(true);
    }

    public function listAds() {
        return view('vendor.adminlte.institucionesads');
    }

    public function create() {
        $adsCombo = InstitutionsView::where('activo','=',1)
            ->where('plan', '<>', '3B')
            ->where('plan_hasta', '>=', Carbon::today())
            ->select('id', 'nombre_corto', 'tipo')
            ->orderBy('nombre_corto');

        return view('catalogs.createads', compact('adsCombo'));
    }

    public function edit($id) {
        $ads = Instituciones_ads::findOrfail($id);

        $adsCombo = InstitutionsView::where('id','=', $ads['object_id'])
            ->where('nombre_corto', '=', $ads['nombre_corto'])->limit(1);

        return view('catalogs.editads', compact('ads', 'adsCombo'));
    }

    public function update($id, Request $request) {
        $ads = Instituciones_ads::findOrFail($id);

        $this->validate($request, [
            'orden_presentacion' => 'required|min:1|max:12',
            'object_id' => 'required',
            'ads_nombre_corto' => 'required|max:255',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);

        $input = $request->all();

        $adsCombo = InstitutionsView::where('id','=', $input['object_id'])
            ->where('nombre_corto', '=', $input['ads_nombre_corto'])
            ->firstOrFail();

        $input['updated_at'] = Carbon::now();
        $input['nombre_corto'] = $input['ads_nombre_corto'];
        $input['categoria'] = $adsCombo['tipo'];

        $ads->fill($input);
        $ads->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }

    public function store(Request $request) {
        $this->validate($request, [
            'orden_presentacion' => 'required|min:1|max:12',
            'object_id' => 'required',
            'ads_nombre_corto' => 'required|max:255',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);

        $input = $request->all();

        $adsCombo = InstitutionsView::where('id','=', $input['object_id'])
            ->where('nombre_corto', '=', $input['ads_nombre_corto'])
            ->firstOrFail();

        $input['updated_at'] = Carbon::now();
        $input['nombre_corto'] = $input['ads_nombre_corto'];
        $input['categoria'] = $adsCombo['tipo'];

        Instituciones_ads::create($input);

        Session::flash('flash_message', 'Registro creado correctamente.');

        return redirect()->back();
    }
}
