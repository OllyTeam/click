<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoboffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joboffers', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('offername');
            $table->string('offertitle');
            $table->string('description');
            $table->string('compensation');
            $table->integer('sector_id');
            $table->integer('district_id');
            $table->integer('category_id');
            $table->string('languages');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('joboffers');
    }
}
