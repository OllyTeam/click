<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_title');
            $table->string('service_desc');
            $table->integer('category_id');
            $table->string('employment_type');
            $table->integer('sector_id');
            $table->integer('district_id');
            $table->integer('province_id');
            $table->string('email');
            $table->integer('phone');
            $table->string('language');
            $table->integer('user_id');
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
        Schema::dropIfExists('s_listings');
    }
}
