<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionNotice extends Model
{
    protected $fillable = [
        "notification_title",
        "academic_year_id",
        "start_date",
        "end_date",
        "application_fee",
    ];
}
