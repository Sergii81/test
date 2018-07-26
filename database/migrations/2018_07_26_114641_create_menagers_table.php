<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menagers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('appointment')->nullable();
            $table->dateTime('employment_date')->nullable();
            $table->integer('salary')->nullable();
            $table->string('avatar');
            $table->integer('chiefs_id')->unsigned()->nullable();
            $table->foreign('chiefs_id')->references('id')->on('chiefs')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menagers');
    }
}
