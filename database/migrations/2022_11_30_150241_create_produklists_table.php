<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produklists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_produk')->nullable();
            $table->string('nama_produk')->nullable();
            $table->string('harga')->nullable();
            $table->string('image')->nullable();
            $table->string('deskripsi_produk')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produklists');
    }
}
