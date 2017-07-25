<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListEventosController extends Controller
{
    public function listEventos() {
        return view('vendor.adminlte.layouts.eventos');
    }
}
