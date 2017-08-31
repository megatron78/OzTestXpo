<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instituciones_ad extends Model
{
    public function institution() {
        return $this->belongsTo(Institution::class);
    }

    public function pregrade() {
        return $this->belongsTo(Pregrade::class);
    }

    public function poscursem() {
        return $this->belongsTo(PosgradeCourseSeminar::class);
    }

    public function event() {
        return $this->belongsTo(Event::class);
    }
}
