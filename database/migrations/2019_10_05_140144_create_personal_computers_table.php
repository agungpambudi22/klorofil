<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_computers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('asset_tag');
            $table->integer('ram');
            $table->string('processor');
            $table->string('mother_board');
            $table->integer('user_id');
            $table->boolean('vga');
            $table->boolean('hdmi');
            $table->boolean('ps2port');
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
        Schema::dropIfExists('personal_computers');
    }
}
