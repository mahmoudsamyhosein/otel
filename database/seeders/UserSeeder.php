<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
                                    'first_name'         =>     Str::random(10),
                                    'last_name'          =>     Str::random(30),
                                    'hotel_name'         =>     Str::random(20),
                                    'phone'              =>     mt_rand(0,1234567899),
                                    'city'               =>     Str::random(20),
                                    'neighborhood'       =>     Str::random(30),
                                    'address'            =>     Str::random(50),
                                    'email'              =>     Str::random(10) .'@gmail.com',
                                    'password'           =>     Hash::make('password'),
                                    
                                ]);
    }


       
}
