<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlldatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alldatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->integer('category_id');
            $table->string('offername')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('compensation')->nullable();
            $table->integer('sector_id');
            $table->integer('district_id');
            $table->integer('province_id');
            $table->string('email');
            $table->integer('phone');
            $table->string('language');
            $table->integer('user_id');
            $table->integer('type');
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
        Schema::dropIfExists('alldatas');
    }
}
