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
        Schema::create('admission_notice_grade_seats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('application_notice_id')->index();
            $table->bigInteger('grade_id')->index();
            $table->integer('seats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_notice_grade_seats');
    }
};
