<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListCursosSeminariosController extends Controller
{
    public function listCursosSeminarios() {
        return view('vendor.adminlte.layouts.cursos');
    }
}
