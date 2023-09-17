<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'name' => 'nullable',
            'first_name' => 'required|string|max:500',
            'last_name' => 'required|string|max:500',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'email_verified_at' => 'nullable',
            'remember_token' => 'nullable|string|max:100',
            'phone' => 'required|string|max:100',
            'mobile' => 'required|string|max:100',
            'age' => 'required|numeric',
            'address' => 'required|string',
            'country_id' => 'nullable|integer',
            'zipcode' => 'required|string|max:250',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
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

        // dd($_POST);

        return User::create([
            'name' => $data['first_name'].' '.$data['last_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'age' => $data['age'],
            'phone' => $data['phone'],
            'mobile' => $data['mobile'],
            'address' => $data['address'],
            'country_id' => $data['country_id'],
            'zipcode' => $data['zipcode'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
