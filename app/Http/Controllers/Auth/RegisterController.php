<?php

namespace App\Http\Controllers\Auth;

use App\Jobs\SendConfirmationEmail;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;

use App\Catalogo_textos;

/**
 * Class RegisterController
 * @package %%NAMESPACE%%\Http\Controllers\Auth
 */
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $terms = Catalogo_textos::select('texto')->where('nombre', 'terminos_condiciones')->get();
        return view('adminlte::auth.register', compact('terms'));
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|max:255',
            'username' => 'sometimes|required|max:255|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'telephone' => 'required|min:7|max:190',
            'contact_person' => 'min:5|max:190',
            'terms'    => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $fields = [
            'name'     => $data['name'],
            'email'    => $data['email'],
            'telephone'    => $data['telephone'],
            'contact_person'    => $data['contact_person'],
            'password' => bcrypt($data['password']),
            'email_token' => base64_encode($data['email']),
        ];
        if (config('auth.providers.users.field','email') === 'username' && isset($data['username'])) {
            $fields['username'] = $data['username'];
        }
        return User::create($fields);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register(Request $request) {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $this->dispatch(new SendVerificationEmail($user));
        return view('verification');
    }

    public function verify($token) {
        $user = User::where('email_token', $token)->first();
        $user->verified = 1;
        if($user->save()) {
            $this->dispatch(new SendConfirmationEmail($user));
            return view('emailconfirm', ['user' => $user]);
        }
    }
}
