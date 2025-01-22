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
        Schema::create('grade_wise_documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('grade_id')->index();
            $table->bigInteger('document_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_wise_documents');
    }
};
