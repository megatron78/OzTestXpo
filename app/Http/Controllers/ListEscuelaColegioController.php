<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListEscuelaColegioController extends Controller
{
    public function listEscuelaColegio() {
        return view('vendor.adminlte.layouts.escuelacolegio');
    }
}
