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
        Schema::create('user_sub_tzs', function (Blueprint $table) {
            $table->id();
            $table->string('tz_id');
            $table->string('tz_group');
            $table->string('tz_sub_status');
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
        //
    }
};
