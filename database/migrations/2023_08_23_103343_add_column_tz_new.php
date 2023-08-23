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
        Schema::table('tz_courses', function (Blueprint $table) {
            $table->string('tz_theory')->after('tz_cover');
            $table->string('tz_practical')->after('tz_theory');
            $table->string('tz_price');
            $table->string('tz_name_eng');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tz_courses', function (Blueprint $table) {
            //
        });
    }
};
