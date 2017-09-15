<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;

        $this->attributes['slug'] = Str::slug($value);
    }

    public function setFecha_evento($value) {
        $this->attributes['fecha_evento'] = $value;

        $dateTmp = Carbon::createFromDate($value);

        $this->attributes['dia_evento'] = $dateTmp->day;
        $this->attributes['mes_evento'] = $dateTmp->format('F');
        $this->attributes['year_evento'] = $dateTmp->year;
    }

    public function getUrlAttribute()
    {
        return route('evento.show', [$this->id, $this->slug]);
    }
}
