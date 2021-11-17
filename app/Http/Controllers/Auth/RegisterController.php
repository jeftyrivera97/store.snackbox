<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


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
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
    
        ]);
    
        $id= $user->id; 

        $clientes = new Cliente();
        $clientes-> codigo_cliente = request ('codigo_cliente');
        $clientes-> rtn = "0000-0000-000000";
        $clientes-> razon_social = "CONSUMIDOR FINAL";
        $clientes-> nombre = request ('name');
        $clientes-> apellido = request ('apellido');
        $clientes-> telefono = request ('telefono');
        $clientes-> sexo = request ('sexo');
        $clientes-> direccion = 'La Ceiba, Atlantida';
        $clientes-> id_ciudad = 1;
        $clientes-> tipo = 1;
        $clientes-> id_estado = 1;
        $clientes-> id_usuario = $id;
        DB::Commit();
        $clientes->save();
        
        $user->roles()->attach(Role::where('name', 'cliente')->first());
    
        return $user;
    }
}
