<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    public function vacancies()
    {
        return $this->belongsTo(Vacancy::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
