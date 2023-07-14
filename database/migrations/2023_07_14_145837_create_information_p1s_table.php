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
        Schema::create('information_p1s', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('member_name');
            $table->string('member_lastname');
            $table->string('member_phone');
            $table->date('member_hbd');
            $table->string('member_gender');
            $table->string('member_address');
            $table->string('member_province');
            $table->string('member_amphur');
            $table->string('member_tambon');
            $table->string('member_zipcode');
            $table->string('member_lineid');
            $table->string('member_career');
            $table->string('member_career_name');
            $table->string('member_position');
            $table->string('member_income');
            $table->string('member_family_income');
            $table->string('member_family_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_p1s');
    }
};
