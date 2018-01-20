<?php

namespace App\Http\Controllers;

use App\Catalogo_textos;
use Illuminate\Http\Request;

class ListPlanesController extends Controller
{
    public function listPlanes() {
        $terms = Catalogo_textos::select('texto')->where('nombre', 'terminos_condiciones')->get();
        return view('vendor.adminlte.layouts.planes', compact('terms'));
    }
}
