<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionNoticeGradeSeat extends Model
{
    protected $fillable = [
        "application_notice_id",
        "grade_id",
        "seats",
    ];
}
