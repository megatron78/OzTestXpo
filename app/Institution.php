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

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;

        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        return route('institutions.show', [$this->id, $this->slug]);
    }
}
