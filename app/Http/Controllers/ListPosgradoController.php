<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListPosgradoController extends Controller
{
    public function listPosgrado() {
        return view('vendor.adminlte.layouts.posgrado');
    }
}
