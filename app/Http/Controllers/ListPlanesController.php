<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListPlanesController extends Controller
{
    public function listPlanes() {
        return view('vendor.adminlte.layouts.planes');
    }
}
