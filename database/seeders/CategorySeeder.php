<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            
                'category_id'      =>     mt_rand(0,12),
                'eng_name'         =>     Str::random(15),
                'ar_name'          =>     Str::random(15),
                'discount'         =>     mt_rand(0,12),
        ]);
    }
}
