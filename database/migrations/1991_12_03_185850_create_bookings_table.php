<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('contract_no');
            $table->string('booking_status');
            $table->string('flat');
            $table->string('flat_kind');
            $table->string('booking_kind');
            $table->date('sign_in');
            $table->date('sign_out');
            $table->string('duration');
            $table->float('rent_value');
            $table->float('amount');
            $table->float('taxes');
            $table->integer('total');
            $table->float('insurances');
            $table->float('paid_up');
            $table->float('Balance');
            
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
