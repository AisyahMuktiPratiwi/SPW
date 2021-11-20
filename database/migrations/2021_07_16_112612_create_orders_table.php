<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('nohp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('metodepembayaran')->nullable();
            $table->char('kodeunik')->nullable();
            $table->string('produk')->nullable();
            $table->bigInteger('totalitem')->nullable();
            $table->char('totalharga')->nullable();
            $table->char('rekening')->nullable();
            $table->text('bukti')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
