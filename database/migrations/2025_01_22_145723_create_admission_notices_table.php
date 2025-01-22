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
        Schema::create('admission_notices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('notification_title');
            $table->bigInteger('academic_year_id')->index();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('application_fee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_notices');
    }
};
