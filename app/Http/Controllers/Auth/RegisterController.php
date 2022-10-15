<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Validator;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $max_id = User::max('id') + 1;
        return User::create([
            'id' => $max_id,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function index()
    {
        $users = User::all();
        return view('auth.lista', ['users' => $users]);
    }

    protected function show($id)
    {
        $user = User::find($id);
        return view('auth.user-form', ['user' => $user]);
    }

    protected function update(HttpRequest $request, User $usuario)
    {
        try {            
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $request->password ? $usuario->password = Hash::make($request->password) : '';
        $usuario->familiar_id = $request->familiar_id;
        $usuario->save();

        return redirect('usuarios')->with('mensagem',   $usuario->name . " alterado com sucesso."); }
        catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
