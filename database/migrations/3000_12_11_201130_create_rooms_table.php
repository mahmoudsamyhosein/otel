<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('flat_number_in_shomos');
            $table->string('level_name');
            $table->integer('rooms_count');
            $table->integer('bathroom_count');
            $table->integer('single_bed_count');
            $table->integer('double_bed_count');
            $table->integer('closit_count');
            $table->integer('tvs_count');
            $table->string('conditioner_type');
            $table->string('flat_kind');
            $table->string('note');
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
        Schema::dropIfExists('rooms');
    }
}
