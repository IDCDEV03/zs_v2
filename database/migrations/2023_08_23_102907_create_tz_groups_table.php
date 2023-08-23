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
        Schema::create('tz_groups', function (Blueprint $table) {
            $table->id();
            $table->string('tz_group_id');
            $table->string('tz_group_name');
            $table->string('tz_group_cover');
            $table->string('tz_group_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tz_groups');
    }
};
