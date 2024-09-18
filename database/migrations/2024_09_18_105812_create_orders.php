<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();  // Primary key, auto-increment
            $table->date('order_date');  // Order date
            $table->string('client_name', 255);  //Client name
            $table->string('client_contact', 255);  // Client contact
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('total_amount', 255);  //Total amount
            $table->string('discount', 255);  //Discount
            $table->string('grand_total', 255);  //Grand total
            $table->string('paid', 255);
            $table->integer('payment_type');  // Payment type (could be 1 for cash, 2 for card, etc.)
            $table->integer('payment_status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
