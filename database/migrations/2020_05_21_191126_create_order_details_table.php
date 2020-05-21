<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('order_details', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer("quantity")->unsigned();

        //     $table->integer('order_id')->unsigned()->nullable();
        //     $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        //     $table->integer('pizza_id')->unsigned();
        //     $table->foreign('pizza_id')->references('id')->on('pizzas')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
