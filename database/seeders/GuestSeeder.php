<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guest_1 = Guest::create([

            'name'                      => 'محمود سامي حسين متولي' ,
            'guest_type'                => 'مقيم' ,
            'approve_type'              => 'بطاقه هوية مدنية' ,
            'place_of_issue'            => 'الرياض' ,
            'date_of_birth'             => Carbon::create('2021', '01', '01'),
            'email'                     => 'test@gmail.com' ,
            'phone_of_work'             => '1234567890' ,
            'nationalty'                => 'مصري' ,
            'id_copy'                   => '1' ,
            'date_of_expiry'            => Carbon::create('2021', '01', '01'),
            'kind'                      => 'ذكر' ,
            'phone'                     => '1234567890' ,
            'place_of_work'             => 'الرياض' ,
            'address'                   => 'الرياض شارع خالد بن الوليد' ,
            'note'                      => 'هذه هي ملاحظة خاصه بالفندق' ,
            'note_2'                    => 'هذه هي ملاحظة خاصة بنظام أوتيل ' , 
            'approve_number'            => '1234567890' ,
            'category_id'               => '1',

        ]);

        
    }
}
