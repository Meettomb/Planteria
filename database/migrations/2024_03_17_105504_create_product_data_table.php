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
        Schema::create('product_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('p_image');
            $table->string('p_name');
            $table->string('pm_category');
            $table->string('ps_category');
            $table->string('main_price');
            $table->string('percentage');
            $table->bigInteger('dis_price')->nullable();
            $table->string('quantity')->nullable();
            $table->longText('description')->nullable();     
            $table->longText('p_benefits')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_data');
    }
};
