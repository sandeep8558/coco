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
        Schema::create('application_parents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('application_id')->index();
            $table->set('relation', ['Father', 'Mother', 'Gardian']);
            $table->string('name');
            $table->string('age');
            $table->string('nationality');
            $table->string('religion');
            $table->string('qualification');
            $table->string('school_name');
            $table->string('college_name');
            $table->string('profession');
            $table->string('office_address');
            $table->string('contact_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_parents');
    }
};
