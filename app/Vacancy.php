<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class)->withPivot('name');
    }

    public function applicant()
    {
        return $this->hasMany(Applicant::class);
    }
}
