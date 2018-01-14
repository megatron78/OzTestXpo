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

        /*$instituciones_view = InstitutionsView::whereIn('id', function($query) {
            $query->select('object_id')
            ->from(with(new Instituciones_ad)->getTable())
                ->where('fecha_fin', '>=', Carbon::now())
                ->orderBy('orden_presentacion');
        })->get();*/
        $instituciones_view = InstitutionsView::join('instituciones_ads', function ($join) {
            $join->on('institutions_views.id', '=', 'instituciones_ads.object_id');
            $join->on('institutions_views.tipo', '=', 'instituciones_ads.categoria');
        })->where('fecha_fin', '>=', Carbon::now())->orderBy('orden_presentacion')
            ->select('institutions_views.id'
                ,'institutions_views.activo'
                ,'institutions_views.tipo'
                ,'institutions_views.clasificacion'
                ,'institutions_views.plan'
                ,'institutions_views.nombre'
                ,'institutions_views.institution_bg_picture'
                ,'institutions_views.institution'
                ,'institutions_views.nombre_corto'
                ,'institutions_views.slug'
                ,'institutions_views.carreras'
                ,'institutions_views.carreras_corto'
                ,'institutions_views.laico'
                ,'institutions_views.religioso'
                ,'institutions_views.masculino'
                ,'institutions_views.femenino'
                ,'institutions_views.mixto'
                ,'institutions_views.horario_extendido'
                ,'institutions_views.extracurriculares'
                ,'institutions_views.porcentaje_profesores_nativos'
                ,'institutions_views.preescolar'
                ,'institutions_views.escuela'
                ,'institutions_views.colegio'
                ,'institutions_views.fiscal'
                ,'institutions_views.privado'
                ,'institutions_views.fiscomisional'
                ,'institutions_views.total_estudiantes'
                ,'institutions_views.max_estudiantes_x_clase'
                ,'institutions_views.area_total'
                ,'institutions_views.area_deportiva'
                ,'institutions_views.area_espacios_verdes'
                ,'institutions_views.area_piscina'
                ,'institutions_views.camara_ip_entrada_salida'
                ,'institutions_views.camara_ip_aulas_espacios'
                ,'institutions_views.province_id'
                ,'institutions_views.city_id'
                ,'institutions_views.sector_id'
                ,'institutions_views.user_id'
                ,'institutions_views.costo'
                ,'institutions_views.promedio_pension'
                ,'institutions_views.fecha_evento'
                ,'institutions_views.hora_evento'
                ,'institutions_views.objetivo'
                ,'institutions_views.duracion'
                ,'institutions_views.fecha_inicio'
                ,'institutions_views.presencial'
                ,'institutions_views.semipresencial'
                ,'institutions_views.distancia'
                ,'institutions_views.direccion'
                ,'institutions_views.telefono'
                ,'institutions_views.celular'
                ,'institutions_views.email'
                ,'institutions_views.web'
                ,'institutions_views.facebook'
                ,'institutions_views.twitter'
                ,'institutions_views.linkedin'
                ,'institutions_views.province_name'
                ,'institutions_views.city_name'
                ,'institutions_views.sector_name'
                ,'institutions_views.plan_desde'
                ,'institutions_views.plan_hasta')
            ->get();

        $bannerData = BannerCategory::where('category_id','=','1')
            ->select('id','photo1_url','photo2_url','photo3_url','photo4_url','photo5_url','url1','url2','url3')
            ->get();
        return view('welcome', compact('bannerData', 'instituciones_view'));
    }
}
