<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/';

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
            'nisn' => 'required|unique:siswas,nisn',
            'nama' => 'required',
            'tgl' => 'required|date',
            'alamat' => 'required',
            'jjg' => 'required',
            'hp' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Siswa
     */
    protected function create(array $data)
{

    $file = $data['foto'];
    $fileName = $file->getClientOriginalName();


    $file->storeAs('foto', $fileName, 'public');

    return Siswa::create([
        'nisn' => $data['nisn'],
        'nama' => $data['nama'],
        'tgl' => $data['tgl'],
        'alamat' => $data['alamat'],
        'jjg' => $data['jjg'],
        'hp' => $data['hp'],
        'foto' => $fileName,
        'password' => Hash::make($data['password']),
    ]);
}

}
