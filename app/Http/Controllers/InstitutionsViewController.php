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

    protected function getRouteScope(Request $request) {
        $scopes = [];
        return isset($scopes) ? $scopes : [];
    }
}
