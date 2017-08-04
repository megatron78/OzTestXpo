<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    public function province() {
        return $this->belongsTo(Province::class);
    }
}
