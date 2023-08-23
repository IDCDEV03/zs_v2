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
        Schema::create('user_sub_drones', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('drone_id');
            $table->string('sub_status');
            $table->string('user_phone');
            $table->string('user_timing');
            $table->string('user_chk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_sub_drones');
    }
};
