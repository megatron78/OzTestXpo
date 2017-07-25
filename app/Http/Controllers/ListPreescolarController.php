<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListPreescolarController extends Controller
{
    public function listPreescolar() {
        return view('vendor.adminlte.layouts.preescolar');
    }
}
