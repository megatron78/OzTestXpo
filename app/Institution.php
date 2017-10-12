<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Institution extends Model
{
    protected $fillable = [
        'nombre',
        'plan',
        'palabras_clave',
        'nombre_corto',
        'preescolar',
        'escuela',
        'colegio',
        'institution_bg_picture',
        'trayectoria',
        'nombre_autoridad',
        'direccion',
        'laico',
        'religioso',
        'masculino',
        'femenino',
        'mixto',
        'fiscal',
        'privado',
        'fiscomisional',
        'pago_promedio_escuela',
        'pago_promedio_colegio',
        'lenguajes',
        'telefono',
        'celular',
        'email',
        'web',
        'facebook',
        'twitter',
        'descripcion',
        'edad_desde',
        'edad_hasta',
        'extracurriculares',
        'horario_extendido',
        'presencial',
        'semipresencial',
        'distancia',
        'matutino',
        'vespertino',
        'nocturno',
        'entrada_matutino',
        'entrada_vespertino',
        'entrada_nocturno',
        'salida_matutino',
        'salida_vespertino',
        'salida_nocturno',
        'salida_horario_extendido',
        'alimentacion',
        'bachillerato_internacional',
        'actividades_extracurriculares',
        'porcentaje_profesores_nativos',
        'total_estudiantes',
        'max_estudiantes_x_clase',
        'area_total',
        'area_deportiva',
        'area_espacios_verdes',
        'area_piscina',
        'seguridad_privada',
        'wifi_interior',
        'wifi_exterior',
        'wifi_otros',
        'camara_ip_entrada_salida',
        'camara_ip_aulas_espacios',
        'capacidad_restaurantes',
        'canchas_indoor',
        'canchas_futbol',
        'canchas_basket',
        'canchas_tenis',
        'mesas_tenis',
        'pista_atletica',
        'computadoras_para_alumnos',
        'teatro',
        'gimnasio',
        'otros',
        'certificaciones_logros',
        'regimen',
        'jurisdiccion',
        'institution_picture_1',
        'institution_picture_2',
        'institution_picture_3',
        'institution_picture_4',
        'institution_picture_5',
        'institution_picture_6',
        'banner_inst_picture_1',
        'banner_inst_picture_2',
        'banner_inst_picture_3',
        'banner_inst_picture_4',
        'banner_inst_picture_5',
        'mapa_url',
        'ruc_invoice',
        'razon_social_invoice',
        'email_invoice',
        'telefono_invoice',
        'direccion_invoice',
        'plan_desde',
        'plan_hasta',
        'province_id',
        'canton_id',
        'parish_id',
        'city_id',
        'sector_id',
        'user_id',
    ];

    public function province() {
        return $this->belongsTo(Province::class);
    }

    public function canton() {
        return $this->belongsTo(Canton::class);
    }

    public function parish() {
        return $this->belongsTo(Parish::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function sector() {
        return $this->belongsTo(Sector::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function setNombreAttribute($value) {
        $this->attributes['nombre'] = $value;

        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        if($this->escuela == 1 or $this->colegio == 1)
            return route('escuelacolegio.show', [$this->id, $this->slug]);
        return route('preescolar.show', [isset($this->province->name) ? $this->province->name : 'provincia', isset($this->city->name) ? $this->city->name : 'ciudad', $this->id, $this->slug]);
    }

    public function scopeProvince($query, $province_id) {
        return $query->where('province_id', $province_id);
    }

    public function scopeCity($query, $city_id) {
        return $query->where('city_id', $city_id);
    }

    public function scopeSector($query, $sector_id) {
        return $query->where('sector_id', $sector_id);
    }

    public function scopeNombreKeyword($query, $name) {
        return $query->where('nombre', 'LIKE', "%$name%")->orWhere('palabras_clave', 'LIKE', "%$name%");
    }

    public function scopeHorario_extendido($query, $horario_extendido) {
        return $query->where('horario_extendido', 1);
    }

    public function scopePago_promedio_escuela($query, $pago_promedio_escuela) {
        $pension = explode(',', $pago_promedio_escuela);
        if($pension[0] == '0' and $pension[1] == '500')
            return $query->where('pago_promedio_escuela', '<', 500)->orWhereNull('pago_promedio_escuela');
        if($pension[0] == '500' and $pension[1] == '500')
            return $query->where('pago_promedio_escuela', '>', $pension[1]);
        return $query->whereBetween('pago_promedio_escuela', $pension);
    }

    public function scopeFiscal($query, $fiscal) {
        return $query->orWhere('fiscal', 1);
    }

    public function scopePrivado($query, $privado) {
        return $query->orWhere('privado', 1);
    }

    public function scopeFiscomisional($query, $fiscomisional) {
        return $query->orWhere('fiscomisional', 1);
    }

    public function scopeLaico($query, $laico) {
        return $query->orWhere('laico', 1);
    }

    public function scopeReligioso($query, $religioso) {
        return $query->orWhere('religioso', 1);
    }

    public function scopeFemenino($query, $femenino) {
        return $query->orWhere('femenino', 1);
    }

    public function scopeMixto($query, $mixto) {
        return $query->orWhere('mixto', 1);
    }

    public function scopeMasculino($query, $masculino) {
        return $query->orWhere('masculino', 1);
    }
}
