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
        Schema::table('idd_drone_sales', function (Blueprint $table) {
            $table->string('d_cover')->after('d_model');
            $table->string('d_img')->after('d_cover');
            $table->string('d_file')->after('d_img');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('idd_drone_sales', function (Blueprint $table) {
            //
        });
    }
};
