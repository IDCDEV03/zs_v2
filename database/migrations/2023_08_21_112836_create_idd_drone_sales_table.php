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
        Schema::create('idd_drone_sales', function (Blueprint $table) {
            $table->id();
            $table->string('d_id');
            $table->string('d_detail');
            $table->string('d_model');
            $table->string('d_price');
            $table->string('d_other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idd_drone_sales');
    }
};
