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
        return $query->orWhere('presencial', 1);
    }

    public function scopeSemipresencial($query, $semipresencial) {
        return $query->orWhere('semipresencial', 1);
    }

    public function scopeDistancia($query, $distancia) {
        return $query->orWhere('distancia', 1);
    }

    public function scopeInstitucion($query, $institucion) {
        return $query->orWhere('institucion', $institucion);
    }

    public function scopeCosto_promedio($query, $costo, $identifier) {
        $costoP = explode(',', $costo);

        if($identifier == 1) {
            if ($costoP[0] == '0' and $costoP[1] == '11000')
                return $query->where('costo', '<', 600)->orWhereNull('costo');
            if ($costoP[0] == '11000' and $costoP[1] == '11000')
                return $query->where('costo', '>', $costoP[1]);
            return $query->whereBetween('costo', $costo);
        }
        else {
            if ($costoP[0] == '0' and $costoP[1] == '600')
                return $query->where('costo', '<', 600)->orWhereNull('costo');
            if ($costoP[0] == '600' and $costoP[1] == '600')
                return $query->where('costo', '>', $costoP[1]);
            return $query->whereBetween('costo', $costo);
        }
    }
}
