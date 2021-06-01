<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/pengguna';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->Customer = new Customer();
        $this->User = new User();
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
            'alamat' => ['required'],
            'Id_kelurahan' => ['required'],
            'Id_kecamatan' => ['required'],
            'Id_kabupaten' => ['required'],
            'Id_provinsi' => ['required'],
            'Nik' => ['required', 'unique:customer'],
            'Kode_pos' => ['required']
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $getUser = $this->User->getDataWithEmail($data['email']);

        $cutomerData = [
            'nama' => $data['name'],
            'alamat' => $data['alamat'],
            'Id_kelurahan' => $data['Id_kelurahan'],
            'Id_kecamatan' => $data['Id_kecamatan'],
            'Id_kabupaten' => $data['Id_kabupaten'],
            'Id_provinsi' => $data['Id_provinsi'],
            'Id_user' => $getUser->id,
            'Nik' => $data['Nik'],
            'Kode_pos' => $data['Kode_pos']
        ];

        $this->Customer->addData($cutomerData);

        $user->assignRole('user');
        return $user;
    }
}
