<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRushhoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rush_hours', function (Blueprint $table) {
            $table->id();
            
            $table->string('from')->nullable(); // من
            $table->string('to')->nullable();  // الي
            $table->string('category')->nullable();
            $table->string('sa')->nullable();
            $table->string('su')->nullable();
            $table->string('mo')->nullable();
            $table->string('tu')->nullable();
            $table->string('we')->nullable();
            $table->string('th')->nullable();
            $table->string('fr')->nullable();

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
        Schema::dropIfExists('rush_hours');
    }
}
