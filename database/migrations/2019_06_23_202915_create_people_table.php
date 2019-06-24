<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('imgpath');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthdate');
            $table->string('middleeducation')->nullable();
            $table->string('higheducation')->nullable();
            $table->string('city');
            $table->string('vk')->nullable();;
            $table->string('inst')->nullable();;
            $table->string('fb')->nullable();;
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
        Schema::dropIfExists('people');
    }
}
