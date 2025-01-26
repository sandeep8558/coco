<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeWiseDocument extends Model
{
    protected $fillable = [
        "grade_id",
        "document_id",
    ];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function document(){
        return $this->belongsTo(Document::class);
    }
}
