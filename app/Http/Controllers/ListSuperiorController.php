<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListSuperiorController extends Controller
{
    public function listSuperior() {
        return view('vendor.adminlte.layouts.superior');
    }
}
