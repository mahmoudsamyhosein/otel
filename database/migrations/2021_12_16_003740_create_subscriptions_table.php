<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            #خدمة شموس
            $table->increments('shomos_id');
            $table->string('shomos_username');//أسم المستخدم
            $table->string('shomos_password');//كلمة المرور
            $table->string('shomos_shomos_subscribtion_code');//رمز الأشتراك
            $table->string('shomos_expiery_date');//تاريخ الصلاحية
            $table->string('shomos_status');//حالة التفعيل

            #المنصة الوطنية للرصد السياحي
            $table->increments('watny_id');
            $table->string('watny_username');//أسم المستخدم
            $table->string('watny_password');//كلمة المرور
            $table->string('watny_subscribtion_code');//مفتاح الربط
            $table->string('watny_expiery_date');//تاريخ الصلاحية
            $table->string('watny_status');//حالة التفعيل

            #xero
            $table->increments('xero_id');
            $table->string('xero_username');//تاريخ البدء
            $table->string('xero_password');//تاريخ الأنتهاء
            $table->string('xero_subscribtion_code');//invoice prefex
            
            $table->string('xero_status');//حالة التفعيل

            #rategate
            $table->increments('rategate_id');
            
            $table->string('rategate_expiery_date');//تاريخ الصلاحية
            $table->string('rategate_status');//حالة التفعيل

            #paytabs
            $table->increments('paytabs_id');
            $table->string('paytabs_email');//أسم المستخدم
            $table->string('paytabs_website');//كلمة المرور
            $table->string('paytabs_secret_key');//رمز الأشتراك
           
            $table->string('paytabs_status');//حالة التفعيل

            #بلدي
            $table->increments('balady_id');
            $table->string('balady_code');// مفتاح الربط
            $table->string('balady_status');//حالة التفعيل

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
        Schema::dropIfExists('subscriptions');
    }
}
