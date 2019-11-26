<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function applicant()
    {
        return $this->hasMany(Applicant::class);
    }
}
