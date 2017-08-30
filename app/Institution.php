<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
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

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;

        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        if($this->escuela == 1 or $this->colegio == 1)
            return route('escuelacolegio.show', [$this->id, $this->slug]);
        return route('preescolar.show', [$this->id, $this->slug]);
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
        return $query->where('nombre', 'LIKE', "%$name%");
    }

    public function scopeHorario_extendido($query, $horario_extendido) {
        return $query->where('horario_extendido', 1);
    }

    public function scopePago_promedio_escuela($query, $pago_promedio_escuela) {
        $pension = explode(',', $pago_promedio_escuela);
        if($pension[1] == '0')
            return $query->where('pago_promedio_escuela', '<', 500)->orWhereNull('pago_promedio_escuela');
        if($pension[1] == '500')
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
