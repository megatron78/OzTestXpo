<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregrade extends Model
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
        return route('superior.show', [$this->id, $this->slug]);
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

    public function scopeFiscal($query, $fiscal) {
        return $query->where('fiscal', 1);
    }

    public function scopePrivado($query, $privado) {
        return $query->where('privado', 1);
    }

    public function scopeFiscomisional($query, $fiscomisional) {
        return $query->where('fiscomisional', 1);
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

    public function scopeCarreras($query, $carreras) {
        return $query->where('carreras', 'LIKE', "%$carreras%");
    }
}
