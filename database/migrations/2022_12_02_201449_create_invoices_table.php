<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_invoice')->nullable();
            $table->integer('id_pengguna')->nullable();
            $table->string('nama_pengguna')->nullable();
            $table->integer('id_pesanan')->nullable();
            $table->string('nama_produk')->nullable();
            $table->integer('jumlah_produk')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invoices');
    }
}
