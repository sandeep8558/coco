<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationParent extends Model
{
    protected $fillable = [
        "application_id",
        "relation",
        "name",
        "age",
        "nationality",
        "religion",
        "qualification",
        "school_name",
        "college_name",
        "profession",
        "office_address",
        "contact_number",
    ];
}
