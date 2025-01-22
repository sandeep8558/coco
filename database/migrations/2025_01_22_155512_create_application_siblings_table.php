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
        Schema::create('application_siblings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('application_id')->index();
            $table->set('relation', ['Brother', 'Sister']);
            $table->string('name');
            $table->string('age');
            $table->string('school_college');
            $table->string('grade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_siblings');
    }
};
