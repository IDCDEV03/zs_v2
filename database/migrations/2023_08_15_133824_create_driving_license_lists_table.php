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
        Schema::create('driving_license_lists', function (Blueprint $table) {
            $table->id();
            $table->string('dl_code');
            $table->string('dl_detail');
            $table->string('dl_type');
            $table->integer('dl_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driving_license_lists');
    }
};
