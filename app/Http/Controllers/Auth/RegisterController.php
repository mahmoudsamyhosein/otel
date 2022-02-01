<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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

            // 'first_name'            =>      ['string', 'max:255'],
            // "last_name"             =>      ['string', 'max:255'],
            // 'email'                 =>      ['required', 'string', 'email', 'max:255', 'unique:users'],
            // "phone"                 =>      ['required', 'numeric', 'min:10'],
            // "city"                  =>      ['string', 'max:255'],
            // 'password'              =>      ['required', 'string', 'min:8', 'confirmed'],
            // 'password'              =>      ['required', 'string', 'min:8', 'same:password'],
            // "hotel_name"            =>      ['string', 'max:255'],
            // "neighborhood"          =>      ['string', 'max:255'],
            // "address"               =>      ['string', 'max:255'],
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
        Alert::success('تم تسجيلك بنجاح');
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
        
    

    protected function store(request $request){

        $dataArray      =       array(
            
            "first_name"          =>          $request->first_name,
            "last_name"          =>           $request->last_name,
            "email"          =>               $request->email,
            "phone"         =>                $request->phone,
            "city"         =>                 $request->city,
            "email"         =>                $request->email,
            "address"       =>                $request->address,
            "password"              =>        $request->password,
            "password_confirm"      =>        $request->password_confirm,
        );

        $user           =       User::create($dataArray);


        
        
    }


   
}
