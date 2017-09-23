<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ListUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listUsers() {
        return view('vendor.adminlte.users');
    }

    public function getUsers(Request $request) {
        $users = User::select('id','name', 'email', 'telephone', 'contact_person', 'verified', 'role')
            ->orderBy('name');

        return DataTables::of($users)->make(true);
    }
}
