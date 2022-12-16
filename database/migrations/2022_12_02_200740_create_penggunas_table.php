<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_pengguna')->nullable();
            $table->string('username')->nullable();
            $table->string('nama')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penggunas');
    }
}
