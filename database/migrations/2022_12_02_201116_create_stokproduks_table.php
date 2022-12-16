<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStokproduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stokproduks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_produk')->nullable();
            $table->string('nama_produk')->nullable();
            $table->integer('stok_produk')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stokproduks');
    }
}
