<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\InstitutionsView;

class InstitutionsViewController extends Controller
{
    public function __invoke(Request $request) {

    }

    protected function getPaidInstitutionsView() {
        $paidInstitutions = InstitutionsView::where('activo','=',1)
            ->where('categoria', '<>', '3B')
            ->where('plan_hasta', '<=', Carbon::now())
            ->select('*')
            ->orderBy('nombre_corto')
            ->orderBy('plan')
            ->orderBy('tipo');

        return $paidInstitutions;
    }

    protected function getComparisonView() {
        $ids = [305,306,307,308,309,310];
        $comparedInstitutions = InstitutionsView::whereIn('id', $ids)
            ->select('nombre_corto','fiscal', 'privado', 'fiscomisional', 'promedio_pension', 'laico', 'religioso',
                'masculino', 'femenino', 'mixto','horario_extendido', 'total_estudiantes', 'max_estudiantes_x_clase',
                'area_total', 'area_deportiva', 'area_espacios_verdes', 'area_piscina', 'camara_ip_entrada_salida',
                'camara_ip_aulas_espacios')
            ->orderBy('nombre_corto')->get();

        $transpose = $comparedInstitutions->groupBy('nombre_corto');
        $transpose = $transpose->toArray();
        $columns = array_keys($transpose);
        //dd($transpose);
        return view('institutions.comparepreescolar', compact('transpose','columns', 'params'));
    }

    protected function getRouteScope(Request $request) {
        $scopes = [];
        return isset($scopes) ? $scopes : [];
    }
}
