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
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uid')->nullable();
            $table->string('uname')->nullable();
            $table->string('email')->nullable();
            $table->string('pid')->nullable();
            $table->string('p_image')->nullable();
            $table->string('product_name')->nullable();
            $table->string('main_price')->nullable();
            $table->string('dis_price')->nullable();
            $table->string('quantity')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
