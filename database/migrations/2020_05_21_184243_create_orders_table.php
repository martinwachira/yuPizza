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
        // Schema::create('orders', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('phoneNo');
        //     $table->string("address");            
        //     $table->decimal("total_money");
        //     $table->timestamps();

        //     $table->integer('customer_id')->unsigned();
        //     $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        // });
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
