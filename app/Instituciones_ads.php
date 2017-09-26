<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituciones_ads extends Model
{
    protected $fillable = ['orden_presentacion', 'categoria', 'object_id', 'nombre_corto', 'fecha_inicio', 'fecha_fin'];
}
