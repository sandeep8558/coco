<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        "grade",
    ];

    public function grade_wise_documents(){
        return $this->hasMany(GradeWiseDocument::class);
    }
}
