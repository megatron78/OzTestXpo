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
}
