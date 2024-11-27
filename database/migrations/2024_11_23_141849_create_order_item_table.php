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
        Schema::create('order_item', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('item_id');

            $table->foreign('order_id' , 'order_item_order_fk')->on('orders')->references('id')->onDelete('cascade');
            $table->foreign('item_id' , 'order_item_item_fk')->on('items')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item');
    }
};
