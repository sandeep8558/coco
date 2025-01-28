<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        "grade_id",
        "admission_for",
        "surname",
        "students_name",
        "fathers_name",
        "mothers_name",
        "date_of_birth",
        "birth_city",
        "birth_district",
        "birth_state",
        "religion",
        "caste",
        "sub_caste",
        "gender",
        "aadhar_number",
        "mother_tongue",
        "native_place",
        "blood_group",
        "primary_contact_number",
        "address",
        "city",
        "state",
        "country",
        "pincode",
        "no_of_brothers",
        "no_of_sisters",
    ];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function application_documents(){
        return $this->hasMany(ApplicationDocument::class);
    }

    public function application_parents(){
        return $this->hasMany(ApplicationParent::class);
    }

    public function application_siblings(){
        return $this->hasMany(ApplicationSibling::class);
    }
}
