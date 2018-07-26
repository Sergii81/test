<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('appointment')->nullable();
            $table->dateTime('employment_date')->nullable();
            $table->integer('salary')->nullable();
            $table->string('avatar');
            $table->integer('seniors_id')->unsigned()->nullable();
            $table->foreign('seniors_id')->references('id')->on('seniors')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('appointment');
            $table->dropColumn('employment_date');
            $table->dropColumn('salary');
            $table->dropColumn('avatar');
            $table->dropColumn('seniors_id');
        });
    }
}
