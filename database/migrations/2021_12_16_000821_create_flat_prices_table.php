<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flat_prices', function (Blueprint $table) {
            $table->id();
            $table->string('flat');
            $table->string('flat_kind');
            $table->string('floor');
            $table->string('room');
            $table->string('price');
            $table->string('lowest_price');
            $table->string('daily_rush_times')->nullable();
            $table->string('monthly_rush_times')->nullable();
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
        Schema::dropIfExists('flat_prices');
    }
}
