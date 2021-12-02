<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
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
        return User::create([
            'first_name' =>           $data['first_name'],
            'last_name' =>            $data['last_name'],
            'email' =>                $data['email'],
            'phone' =>                $data['phone'],
            'city'  =>                $data['city'],
            'neighborhood' =>         $data['neighborhood'],
            'address' =>              $data['address'],
            'email' =>                $data['email'],
            'password' => Hash::make( $data['password']),
            'password_confirm' =>     $data['password'],
        ]);

    }


    public function store(request $request){

        $dataArray      =       array(
            
            "first_name"          =>          $request->first_name,
            "last_name"          =>           $request->last_name,
            "email"          =>               $request->email,
            "phone"         =>                $request->phone,
            "city"         =>                 $request->city,
            "email"         =>                $request->email,
            "address"       =>                $request->address,
            "password"      =>                $request->password,
            "password_confirm"      =>        $request->password_confirm,
        );

        $user           =       User::create($dataArray);


        if(!is_null($user)) {
            return back()->with("success", "Success! Registration completed");
        }

        else {
            return back()->with("failed", "Alert! Failed to register");
        }

        
    }
}
