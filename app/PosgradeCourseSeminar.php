<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PosgradeCourseSeminar extends Model
{
    protected $fillable = [
        'nombre',
        'activo',
        'plan',
        'palabras_clave',
        'nombre_corto',
        'clasificacion',
        'tipo',
        'campo',
        'institucion',
        'costo',
        'instructores',
        'telefono',
        'celular',
        'email',
        'web',
        'facebook',
        'twitter',
        'linkedin',
        'presencial',
        'semipresencial',
        'distancia',
        'cupos',
        'fecha_inicio',
        'fecha_fin',
        'duracion',
        'hora_ingreso',
        'hora_salida',
        'lugar',
        'objetivo',
        'temario',
        'instructores_detalle',
        'incluye',
        'mapa_url',
        'documento_pdf1',
        'documento_pdf2',
        'documento_pdf3',
        'otros_posgrados_cursos',

        'max_alumnos_x_nivel',
        'meses_inicio',
        'duracion_nivel',
        'horarios',

        'ruc_invoice',
        'razon_social_invoice',
        'email_invoice',
        'telefono_invoice',
        'direccion_invoice',
        'plan_desde',
        'plan_hasta',
        'country_id',
        'province_id',
        'city_id',
        'user_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
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
        if($this->clasificacion === 'Posgrado')
            return route('posgrado.show', [isset($this->province->name) ? $this->province->name : 'provincia', isset($this->city->name) ? $this->city->name : 'ciudad', $this->id, $this->slug]);
        return route('cursoseminario.show', [isset($this->province->name) ? $this->province->name : 'provincia', isset($this->city->name) ? $this->city->name : 'ciudad', $this->id, $this->slug]);
    }

    public function scopeCountry($query, $country_id)
    {
        return $query->where('country_id', $country_id);
    }

    public function scopeProvince($query, $province_id)
    {
        return $query->where('province_id', $province_id);
    }

    public function scopeCity($query, $city_id)
    {
        return $query->where('city_id', $city_id);
    }

    public function scopeKeywordtopic($query, $name)
    {
        return $query->where('nombre', 'LIKE', "%$name%")->orWhere('palabras_clave', 'LIKE', "%$name%")->orWhere('institucion', 'LIKE', "%$name%");
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

    public function scopeInstitucion($query, $institucion)
    {
        return $query->where('institucion', $institucion);
    }

    public function scopeTipo($query, $tipo)
    {
        return $query->where('tipo', $tipo);
    }

    public function scopeCosto_promedio_posgrados($query, $costo)
    {
        $costoP = explode(',', $costo);

        if ($costoP[0] == '0' and $costoP[1] == '11000')
            return $query->where('costo', '<', 11000)->orWhereNull('costo');
        if ($costoP[0] == '11000' and $costoP[1] == '11000')
            return $query->where('costo', '>', $costoP[1]);
        return $query->whereBetween('costo', $costoP);
    }

    public function scopeCosto_promedio_cursos($query, $costo)
    {
        $costoP = explode(',', $costo);

        if ($costoP[0] == '0' and $costoP[1] == '600')
            return $query->where('costo', '<', 600)->orWhereNull('costo');
        if ($costoP[0] == '600' and $costoP[1] == '600')
            return $query->where('costo', '>', $costoP[1]);
        return $query->whereBetween('costo', $costoP);
    }
}
