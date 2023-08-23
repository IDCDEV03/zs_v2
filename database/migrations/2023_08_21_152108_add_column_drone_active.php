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
        Schema::table('idd_drones', function (Blueprint $table) {
            $table->string('drone_active')->after('drone_price');
            $table->string('drone_desc')->after('drone_course');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('idd_drones', function (Blueprint $table) {
            //
        });
    }
};
