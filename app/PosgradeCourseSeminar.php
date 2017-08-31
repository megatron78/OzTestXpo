<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PosgradeCourseSeminar extends Model
{
    public function province() {
        return $this->belongsTo(Province::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
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
        return route('posgrado.show', [$this->id, $this->slug]);
    }

    public function scopeProvince($query, $province_id) {
        return $query->where('province_id', $province_id);
    }

    public function scopeCity($query, $city_id) {
        return $query->where('city_id', $city_id);
    }

    public function scopeKeywordtopic($query, $name) {
        return $query->where('nombre', 'LIKE', "%$name%")->orWhere('palabras_clave', 'LIKE', "%$name%");
    }

    public function scopePresencial($query, $presencial) {
        return $query->where('presencial', 1);
    }

    public function scopeSemipresencial($query, $semipresencial) {
        return $query->where('semipresencial', 1);
    }

    public function scopeDistancia($query, $distancia) {
        return $query->where('distancia', 1);
    }

    public function scopeInstitucion($query, $institucion) {
        return $query->where('institucion', $institucion);
    }

    public function scopeCosto_promedio($query, $costo) {
        $costoP = explode(',', $costo);
        if($costoP[1] == '0')
            return $query->where('costo', '<', 500)->orWhereNull('costo');
        if($costoP[1] == '500')
            return $query->where('costo', '>', $costoP[1]);
        return $query->whereBetween('costo', $costoP);
    }
}
