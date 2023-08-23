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
        Schema::create('tz_courses', function (Blueprint $table) {
            $table->id();
            $table->string('tz_id');
            $table->string('tz_group');
            $table->string('tz_name');
            $table->string('tz_cover');
            $table->string('tz_status');
            $table->string('tz_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tz_courses');
    }
};
