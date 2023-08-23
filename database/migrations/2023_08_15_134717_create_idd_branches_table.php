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
        Schema::create('idd_branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_id');
            $table->string('branch_province');
            $table->string('branch_name');           
            $table->string('branch_address')->nullable();
            $table->string('branch_fb')->nullable();
            $table->string('branch_phone')->nullable();
            $table->string('branch_email')->nullable();
            $table->string('branch_gps')->nullable();
            $table->string('branch_other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idd_branches');
    }
};
