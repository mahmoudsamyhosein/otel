<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { // بيانات الفندق في التطبيق
        Schema::create('hotels_info', function (Blueprint $table) {

            $table->id();

            $table->string('hotel_name')->nallable(); //اسم الفندق
            $table->string('country')->nallable(); //الدولة
            $table->string('city')->nallable(); // المدينة
            $table->string('naiborhood')->nallable(); //الحي
            $table->string('address')->nallable(); // العنوان
            $table->integer('hotel_number')->nallable(); // رقم الاوتيل
            $table->integer('fax')->nallable(); // فاكس
            $table->string('currency')->nallable(); // العملة
            $table->string('tax_num')->nallable();// الرقم الضريبي
            $table->string('com_no')->nallable();// السجل التجاري
            $table->string('eng_nam')->nallable(); // الاسم بالانجليزية
            $table->string('email')->unique(); //البريد الالكتروني
            $table->string('website')->nallable(); //  الموقع
            $table->string('mail_box')->nallable(); //صندوق بريد
            $table->string('post_code')->nallable(); // الكود البريدي
            $table->string('logo')->nallable(); // اللوجو
            $table->string('map')->nallable(); // الخريطة
            $table->string('expiry_date')->nallable(); //تاريخ الأنتهاء
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels_info');
    }
}
