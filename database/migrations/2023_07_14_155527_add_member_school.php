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
        Schema::table('information_p1s', function (Blueprint $table) {
            $table->string('member_school');
            $table->string('member_class');
            $table->string('std_family_income');
            $table->string('std_family_member');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('information_1s', function (Blueprint $table) {
            //
        });
    }
};
