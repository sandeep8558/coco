<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionNoticeGradeSeat extends Model
{
    protected $fillable = [
        "admission_notice_id",
        "grade_id",
        "seats",
    ];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
}
