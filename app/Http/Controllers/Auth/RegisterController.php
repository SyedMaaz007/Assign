<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
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
            'gender' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'family_type' => ['required', 'string', 'max:255'],
            'income' => ['required', 'string', 'max:255'],
            'is_manglik' => ['required', 'string', 'max:255'],
            'price1' => ['required', 'string', 'max:255'],
            'price2' => ['required', 'string', 'max:255'],
            'ptr_manglik' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
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

       $add= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'occupation' => $data['occupation'],
            'family_type' => $data['family_type'],
            'income' => $data['income'],
            'is_manglik' => $data['is_manglik'],
            'price1' => $data['price1'],
            'price2' => $data['price2'],
            'ptr_manglik' => $data['ptr_manglik'],
        ]);

        foreach ($data['p_occupation'] as $key)
        {
            $insert=[
                'user_email'=> $data['email'],
                'occupation'=> $key,
            ];
            DB::table('ptr_occupation')->insert($insert);
        }
        foreach ($data['p_family'] as $key)
        {
            $insert=[
                'user_email'=> $data['email'],
                'family_type'=> $key,
            ];
            DB::table('ptr_family')->insert($insert);
        }

        session()->put('USER',$data['email']);
        return $add;

    }

}
