<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\InstitutionsView;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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
        $inputs = Input::all();
        $integerIDs = array_map('intval', explode(',', $inputs["params"]));

        $bindingsString = implode(',', array_fill(0, count($integerIDs), '?'));

        $sqlQuery = "SELECT '', 'Sostenimiento', 'Promedio Pensión', 
                        'Religión', 'Género', 'Horario Extendido', 'Total Estudiantes', 'Máximo Estudiantes por Clase', 
                        'Área Total', 'Área Deportiva', 'Área Espacios Verdes', 'Área Piscina', 'Cámara IP Entrada/Salida', 
                        'Cámara IP Aulas/Espacios'
                        union all
                        select nombre_corto as `Nombre Corto`,
                        case 
                        when fiscal=1 then 'Fiscal'
                        else
                        case
                        when privado=1 then 'Privado'
                        else
                        case
                        when fiscomisional=1 then 'Fiscomisional'
                        else
                        'ND'
                        end
                        end
                        end as Sostenimiento,
								coalesce(promedio_pension,0) as `Promedio Pensión`,
                        case 
                        when laico=1 then 'Laico'
                        else
                        case
                        when religioso=1 then 'Religioso'
                        else
                        'ND'
                        end
                        end as Religión,
                        case 
                        when masculino=1 then 'Mascuino'
                        else
                        case
                        when femenino=1 then 'Femenino'
                        else
                        case
                        when mixto=1 then 'Mixto'
                        else
                        'ND'
                        end
                        end
                        end as Género, 
								CASE WHEN horario_extendido = 1 THEN 'SI' ELSE 'NO' END AS `Horario Extendido`,
								coalesce(total_estudiantes, 0) as `Total Estudiantes`, 
								coalesce(max_estudiantes_x_clase, 0) as `Máximo Estudiantes por Clase`,
                        coalesce(area_total, 0) as `Área Total`,
								coalesce(area_deportiva, 0) as `Área Deportiva`,
								coalesce(area_espacios_verdes, 0) as `Área Espacios Verdes`, 
								coalesce(area_piscina, 0) as `Área Piscina`,
								CASE WHEN camara_ip_entrada_salida = 1 THEN 'SI' ELSE 'NO' END AS `Cámara IP Entrada/Salida`,
                        CASE WHEN camara_ip_aulas_espacios = 1 THEN 'SI' ELSE 'NO' END AS `Cámara IP Aulas/Espacios`
                        FROM `institutions_views` where id in ({$bindingsString})";

        $tagsMM = DB::select($sqlQuery, $integerIDs);

        $comparepreescolar =  $tagsMM;
        foreach($comparepreescolar as $key => $row) {
            foreach($row as $field => $value) {
                $transposedpre[$field][] = $value;
            }
        }
        //dd($transposedpre);
        return view('institutions.comparepreescolar', compact('transposedpre'));
    }

    protected function getRouteScope(Request $request) {
        $scopes = [];
        return isset($scopes) ? $scopes : [];
    }
}
