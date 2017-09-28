<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerCategory extends Model
{
    protected $fillable = [
        'category_id',
        'photo1_url',
        'photo2_url',
        'photo3_url',
        'photo4_url',
        'photo5_url',
        'created_at',
        'updated_at',
    ];
}
