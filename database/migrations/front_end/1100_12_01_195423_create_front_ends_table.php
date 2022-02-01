<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontEndsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { // تعديلات الفرونت أند 
     // أسم المتحكم Front_end

        Schema::create('front_ends', function (Blueprint $table) {

            $table->id();
            $table->string('theme_info')->nullable();
            $table->string('theme_name')->nullable();
            $table->string('theme_author')->nullable();

            // قائمة الموقع في الشاشات الكبيرة
            $table->unsignedBigInteger('pc_menu_id')->nullable();
            $table->string('pc_menu_text')->nullable();
            $table->string('pc_menu_link')->nullable();
            $table->string('pc_menu_logo')->nullable();

            // قائمة الموقع في حجم الموبايل والتابلت
            $table->unsignedBigInteger('mobile_menu_id')->nullable();
            $table->string('mobile_menu_text')->nullable();
            $table->string('mobile_menu_link')->nullable();
            $table->string('mobile_menu_logo')->nullable();

            // السيلادر الرئيسيي للموقع
            $table->unsignedBigInteger('slider_id')->nullable();
            $table->string('slider_image')->nullable();
            $table->string('slider_text')->nullable();
            $table->string('slider_url')->nullable();


            // قسم عنا الأول 
            $table->unsignedBigInteger('about_us_id')->nullable();
            $table->string('about_us_services')->nullable();
            $table->string('about_us_link')->nullable();
            $table->string('about_us_image')->nullable();

            // قسم الخدمات الثاني
            $table->unsignedBigInteger('services_id')->nullable();
            $table->string('services_text')->nullable();
            $table->string('services_link')->nullable();
            $table->string('services_icon')->nullable();

            // القسم الثالث  fun-facts
            $table->unsignedBigInteger('fun_facts_id')->nullable();
            $table->string('fun_facts_text')->nullable();
            $table->string('fun_facts_link')->nullable();
            $table->string('fun_facts_image')->nullable();

            // القسم الرابع البروفايلو
            $table->unsignedBigInteger('profilo_id')->nullable();
            $table->string('profilo_text')->nullable();
            $table->string('profilo_link')->nullable();
            $table->string('profilo_image')->nullable();

            // calltoaction القسم الخامس 
            $table->unsignedBigInteger('calltoaction_id')->nullable();
            $table->string('calltoaction_text')->nullable();
            $table->string('calltoaction_link')->nullable();
            $table->string('calltoaction_image')->nullable();

            //قسم المدونة
            $table->unsignedBigInteger('blog_id')->nullable();
            $table->string('blog_text')->nullable();
            $table->string('blog_link')->nullable();
            $table->string('blog_image')->nullable();
            $table->string('blog_body')->nullable();

            //القسم السادس الشريك 
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->string('partner_text')->nullable();
            $table->string('partner_link')->nullable();
            $table->string('partner_image')->nullable();


            // الفوتور
            $table->unsignedBigInteger('footer_id')->nullable();
            $table->string('footer_text')->nullable();
            $table->string('footer_link')->nullable();
            $table->string('footer_image')->nullable();

             //صفحات الموقع
             $table->unsignedBigInteger('page_id')->nullable();
             $table->string('pages_link')->nullable();
             $table->string('pages_text')->nullable();
             $table->string('pages_content')->nullable();


            // الألوان وتعديل المظهر
            $table->string('theme_custom_css')->nullable();
            $table->string('theme_custom_js')->nullable();
            $table->string('theme_colors')->nullable();

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
        Schema::dropIfExists('front_ends');
    }
}
