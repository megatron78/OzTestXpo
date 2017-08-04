<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    public function canton() {
        return $this->belongsTo(Canton::class);
    }
}
