<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;

        $this->attributes['slug'] = Str::slug($value);
    }
}
