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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('grade_id')->index();
            $table->set('admission_for', ['New', 'Re-admission'])->default('New');
            $table->string('surname');
            $table->string('students_name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->date('date_of_birth');
            $table->string('birth_city');
            $table->string('birth_district');
            $table->string('birth_state');
            $table->string('religion');
            $table->string('caste')->nullable();
            $table->string('sub_caste')->nullable();
            $table->set('gender', ['Male', 'Female', 'Other']);
            $table->string('aadhar_number');
            $table->string('mother_tongue');
            $table->string('native_place');
            $table->set('blood_group', ['O+ve', 'O-ve', 'A+ve', 'A-ve', 'B+ve', 'B-ve', 'AB+ve', 'AB-ve', 'Other']);
            $table->string('primary_contact_number');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('pincode');
            $table->integer('no_of_brothers');
            $table->integer('no_of_sisters');

            $table->string('tracking_id')->nullable();
            $table->string('bank_ref_no')->nullable();
            $table->string('order_status')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
