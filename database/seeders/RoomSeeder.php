<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room_1 =   DB::table('rooms')->insert([
                'name'                     =>     Str::random(10),
                'level_name'               =>     Str::random(30),
                'flat_number_in_shomos'    =>     mt_rand(0,1234),
                'rooms_count'              =>     mt_rand(0,1234),
                'bathroom_count'           =>     mt_rand(0,1234),
                'single_bed_count'         =>     mt_rand(0,1234),
                'double_bed_count'         =>     mt_rand(0,1234),
                'closit_count'             =>     mt_rand(0,1234),
                'tvs_count'                =>     mt_rand(0,1234),
                'conditioner_type'         =>     Str::random(10),
                'flat_kind'                =>     Str::random(10),
                'note'                     =>     Str::random(10),
            ]);
        

      $room_2 =   DB::table('rooms')->insert([
                'name'                     =>     Str::random(10),
                'level_name'               =>     Str::random(30),
                'flat_number_in_shomos'    =>     mt_rand(0,1234),
                'rooms_count'              =>     mt_rand(0,1234),
                'bathroom_count'           =>     mt_rand(0,1234),
                'single_bed_count'         =>     mt_rand(0,1234),
                'double_bed_count'         =>     mt_rand(0,1234),
                'closit_count'             =>     mt_rand(0,1234),
                'tvs_count'                =>     mt_rand(0,1234),
                'conditioner_type'         =>     Str::random(10),
                'flat_kind'                =>     Str::random(10),
                'note'                     =>     Str::random(10),
            ]);
    }
}
