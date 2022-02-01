<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    # بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {// جدول الحجوزات
        Schema::create('bookings', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('contract_no');// رقم العقد
            $table->string('booking_status'); // حالة الحجز
            $table->string('booking_source'); // مصدر الحجز
            $table->string('times_from'); // الوقت من
            $table->string('times_to');// الوقت الي
            $table->string('time');// الفترة
            $table->string('days');// الأيام
            $table->string('rush_price');// سعر وقت الذروة
            $table->string('company_name');// أسم الشركة
            $table->string('escorts');//المرافقون
            $table->string('flat');// الشقة
            $table->string('why_visit_us');//سبب الزيارة
            $table->string('flat_kind');// نوع الشقة
            $table->string('booking_kind');// نوع الحجز
            $table->date('sign_in');// تسجيل دخول
            $table->date('sign_out');// تسجيل خروج
            $table->string('duration');// المدة
            $table->float('rent_value');// القيمة الأيجارية
            $table->float('amount');// القيمة
            $table->float('taxes');// الضرائب
            $table->integer('total');// الأجمالي
            $table->float('insurances');// التأمينات
            $table->float('paid_up');// المدفوع
            $table->float('Balance');// الرصيد
            
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
        Schema::dropIfExists('bookings');
    }
}
