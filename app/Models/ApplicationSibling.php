<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationSibling extends Model
{
    protected $fillable = [
        "application_id",
        "relation",
        "name",
        "age",
        "school_college",
        "grade",
    ];

    public function application(){
        return $this->belongsTo(Application::class);
    }
}
