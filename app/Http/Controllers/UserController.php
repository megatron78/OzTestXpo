<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function edit($id) {
        $user = User::findOrfail($id);
        return view('catalogs.edituser', compact('user'));
    }

    public function update($id, Request $request) {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|max:255',
            'password' => 'sometimes',
            'telephone' => 'required|min:7|max:190',
            'contact_person' => 'min:5|max:190',
        ]);

        $input = $request->all();
        $input['updated_at'] = Carbon::now();

        if (!isset($input['password']) || trim($input['password']) === '')
            $input['password'] = $input['pwd'];
        else
            $input['password'] = bcrypt($input['password']);
        $user->fill($input);
        $user->save();

        Session::flash('flash_message', 'Registro actualizado correctamente.');

        return redirect()->back();
    }
}
