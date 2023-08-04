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
        Schema::create('information_p2s', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('member_multimedia')->nullable();
            $table->string('member_activity')->nullable();
            $table->string('member_travel')->nullable();
            $table->string('member_license_chk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infomation_p2s');
    }
};
