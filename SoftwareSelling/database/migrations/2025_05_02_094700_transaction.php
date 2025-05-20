<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('orderId')->unique();
            $table->string('productName');
            $table->string('productImg')->nullable();
            $table->date('orderDate');
            $table->string('customerName');
            $table->string('payment');
            $table->string('paymentStatus');
            $table->decimal('totalPrice', 10, 2);
            $table->string('quantity');
            $table->string('orderStatus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
