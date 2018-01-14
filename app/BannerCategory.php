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
        'url1',
        'url2',
        'url3',
        'url4',
        'url5',
    ];

    public function setUrl1Attribute($value) {
        if(!empty($value)) {
            if (strpos($value, 'http') === false)
                $value = 'http://' . $value;
        }

        $this->attributes['url1'] = $value;
    }
    public function setUrl2Attribute($value) {
        if(!empty($value)) {
            if (strpos($value, 'http') === false)
                $value = 'http://' . $value;
        }

        $this->attributes['url2'] = $value;
    }
    public function setUrl3Attribute($value) {
        if(!empty($value)) {
            if (strpos($value, 'http') === false)
                $value = 'http://' . $value;
        }

        $this->attributes['url3'] = $value;
    }
}
