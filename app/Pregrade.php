<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pregrade extends Model
{
    protected $fillable = [
        'nombre',
        'activo',
        'plan',
        'palabras_clave',
        'nombre_corto',
        'tipo',
        'pregrade_bg_picture',
        'categoria',
        'cod_instituto',
        'estado_legal',
        'trayectoria',
        'nombre_autoridad',
        'direccion',
        'fiscal',
        'privado',
        'fiscomisional',
        'telefono',
        'celular',
        'email',
        'email_adicional',
        'web',
        'facebook',
        'twitter',
        'linkedin',
        'descripcion',
        'presencial',
        'semipresencial',
        'distancia',
        'matutino',
        'vespertino',
        'nocturno',
        'carreras',
        'carreras_corto',
        'area_total',
        'area_deportiva',
        'area_espacios_verdes',
        'area_piscina',
        'seguridad_privada',
        'wifi_interior',
        'wifi_exterior',
        'wifi_otros',
        'capacidad_restaurantes',
        'canchas_indoor',
        'canchas_futbol',
        'canchas_basket',
        'canchas_tenis',
        'mesas_tenis',
        'pista_atletica',
        'teatro',
        'gimnasio',
        'otros',
        'certificaciones_logros',
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

    public function city() {
        return $this->belongsTo(City::class);
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
        return route('superior.show', [isset($this->province->name) ? $this->province->name : 'provincia', isset($this->city->name) ? $this->city->name : 'ciudad', $this->id, $this->slug]);
    }

    public function scopeProvince($query, $province_id) {
        return $query->where('province_id', $province_id);
    }

    public function scopeCity($query, $city_id) {
        return $query->where('city_id', $city_id);
    }

    public function scopeNombreKeyword($query, $name) {
        return $query->where('nombre', 'LIKE', "%$name%")->orWhere('palabras_clave', 'LIKE', "%$name%");
    }

    public function scopeFiscal($query, $foo, $privado, $fiscomisional) {
        return $query->where(function ($query) use ($privado, $fiscomisional)
        {$query->where('fiscal', 1)->orWhere('privado', $privado)->orWhere('fiscomisional', $fiscomisional);});
    }

    public function scopePrivado($query, $foo, $fiscal, $fiscomisional) {
        return $query->where(function ($query) use ($fiscal, $fiscomisional)
        {$query->where('privado', 1)->orWhere('fiscal', $fiscal)->orWhere('fiscomisional', $fiscomisional);});
    }

    public function scopeFiscomisional($query, $foo, $privado, $fiscal) {
        return $query->where(function ($query) use ($privado, $fiscal)
        {$query->where('fiscomisional', 1)->orWhere('privado', $privado)->orWhere('fiscal', $fiscal);});
    }

    public function scopePresencial($query, $foo, $semipresencial, $distancia) {
        return $query->where(function ($query) use ($semipresencial, $distancia)
        {$query->where('presencial', 1)->orWhere('semipresencial', $semipresencial)->orWhere('distancia', $distancia);});
    }

    public function scopeSemipresencial($query, $foo, $presencial, $distancia) {
        return $query->where(function ($query) use ($presencial, $distancia)
        {$query->where('semipresencial', 1)->orWhere('presencial', $presencial)->orWhere('distancia', $distancia);});
    }

    public function scopeDistancia($query, $foo, $presencial, $semipresencial) {
        return $query->where(function ($query) use ($presencial, $semipresencial)
        {$query->where('distancia', 1)->orWhere('presencial', $presencial)->orWhere('semipresencial', $semipresencial);});
    }

    public function scopeCarreras($query, $carreras) {
        return $query->where('carreras', 'LIKE', "%$carreras%");
    }

    public function scopeTipo($query, $tipo) {
        return $query->where('tipo', '=', "$tipo");
    }
}
