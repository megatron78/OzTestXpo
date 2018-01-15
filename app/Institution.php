<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Institution extends Model
{
    protected $fillable = [
        'nombre',
        'activo',
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

    public function setWebAttribute($value) {
        if(!empty($value)) {
            if (strpos($value, 'http') === false)
                $value = 'http://' . $value;
        }

        $this->attributes['web'] = $value;
    }

    public function setFacebookAttribute($value) {
        if(!empty($value)) {
            if (strpos($value, 'http') === false)
                $value = 'http://' . $value;
        }

        $this->attributes['facebook'] = $value;
    }

    public function setTwitterAttribute($value) {
        if(!empty($value)) {
            if (strpos($value, 'http') === false)
                $value = 'http://' . $value;
        }

        $this->attributes['twitter'] = $value;
    }

    public function setLinkedinAttribute($value) {
        if(!empty($value)) {
            if (strpos($value, 'http') === false)
                $value = 'http://' . $value;
        }

        $this->attributes['linkedin'] = $value;
    }

    public function getUrlAttribute()
    {
        if($this->escuela == 1 or $this->colegio == 1)
            return route('escuelacolegio.show', [isset($this->province->name) ? $this->province->name : 'provincia', isset($this->city->name) ? $this->city->name : 'ciudad', $this->id, $this->slug]);
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

    public function scopeFiscal($query, $foo, $privado, $fiscomisional) {
        if($privado != 0 and $fiscomisional != 0)
            return $query->where(function ($query) use ($privado, $fiscomisional)
            {$query->where('fiscal', 1)->orWhere('privado', $privado)->orWhere('fiscomisional', $fiscomisional);});
        elseif ($privado != 0)
            return $query->where(function ($query) use ($privado, $fiscomisional)
            {$query->where('fiscal', 1)->orWhere('privado', $privado);});
        elseif ($fiscomisional != 0)
            return $query->where(function ($query) use ($privado, $fiscomisional)
            {$query->where('fiscal', 1)->orWhere('fiscomisional', $fiscomisional);});
        else
            return $query->where(function ($query) use ($privado, $fiscomisional)
            {$query->where('fiscal', 1);});
    }

    public function scopePrivado($query, $foo, $fiscal, $fiscomisional) {
        if($fiscal != 0 and $fiscomisional != 0)
            return $query->where(function ($query) use ($fiscal, $fiscomisional)
            {$query->where('privado', 1)->orWhere('fiscal', $fiscal)->orWhere('fiscomisional', $fiscomisional);});
        elseif ($fiscal != 0)
            return $query->where(function ($query) use ($fiscal, $fiscomisional)
            {$query->where('privado', 1)->orWhere('fiscal', $fiscal);});
        elseif ($fiscomisional != 0)
            return $query->where(function ($query) use ($fiscal, $fiscomisional)
            {$query->where('privado', 1)->orWhere('fiscomisional', $fiscomisional);});
        else
            return $query->where(function ($query) use ($fiscal, $fiscomisional)
            {$query->where('privado', 1);});
    }

    public function scopeFiscomisional($query, $foo, $privado, $fiscal) {
        if($privado != 0 and $fiscal != 0)
            return $query->where(function ($query) use ($privado, $fiscal)
            {$query->where('fiscomisional', 1)->orWhere('privado', $privado)->orWhere('fiscal', $fiscal);});
        elseif ($privado != 0)
            return $query->where(function ($query) use ($privado, $fiscal)
            {$query->where('fiscomisional', 1)->orWhere('privado', $privado);});
        elseif ($fiscal != 0)
            return $query->where(function ($query) use ($privado, $fiscal)
            {$query->where('fiscomisional', 1)->orWhere('fiscal', $fiscal);});
        else
            return $query->where(function ($query) use ($privado, $fiscal)
            {$query->where('fiscomisional', 1);});
    }

    public function scopeLaico($query, $foo, $religioso) {
        return $query->where(function ($query) use ($religioso)
        {$query->orWhere('laico', 1)->orWhere('religioso', $religioso);});
    }

    public function scopeReligioso($query, $foo, $laico) {
        return $query->where(function ($query) use ($laico)
        {return $query->orWhere('religioso', 1)->orWhere('laico', $laico);});
    }

    public function scopeFemenino($query, $foo, $mixto, $masculino) {
        return $query->where(function ($query) use ($mixto, $masculino)
        {$query->where('femenino', 1)->orWhere('mixto', $mixto)->orWhere('masculino', $masculino);});
    }

    public function scopeMixto($query, $foo, $femenino, $masculino) {
        return $query->where(function ($query) use ($femenino, $masculino)
        {$query->where('mixto', 1)->orWhere('femenino', $femenino)->orWhere('masculino', $masculino);});
    }

    public function scopeMasculino($query, $foo, $femenino, $mixto) {
        return $query->where(function ($query) use ($femenino, $mixto)
        {$query->where('masculino', 1)->orWhere('femenino', $femenino)->orWhere('mixto', $mixto);});
    }
}
