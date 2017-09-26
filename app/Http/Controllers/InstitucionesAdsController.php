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
        $ads = Instituciones_ads::select('id', 'orden_presentacion', 'categoria', 'object_id', 'nombre_corto', 'fecha_inicio', 'fecha_fin')
            ->orderBy('orden_presentacion');

        return DataTables::of($ads)->make(true);
    }

    public function listAds() {
        return view('vendor.adminlte.institucionesads');
    }

    public function create() {
        $ads = InstitutionsView::where('plan', '!=', '3B')
            ->where('activo', '=', 1)
            ->select('id', 'nombre_corto', 'tipo')->get();

        return view('catalogs.createads', compact('ads'));
    }

    public function edit($id) {
        $ads = Instituciones_ads::findOrfail($id);
        return view('catalogs.editads', compact('ads'));
    }

    public function update($id, Request $request) {
        $ads = Instituciones_ads::findOrFail($id);

        $this->validate($request, [
            'orden_presentacion' => 'required|min:1|max:12',
            'categoria' => 'required|max:255',
            'object_id' => 'required',
            'nombre_corto' => 'required|max:255',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);

        $input = $request->all();
        $input['updated_at'] = Carbon::now();

        $ads->fill($input);
        $ads->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
