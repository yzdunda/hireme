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

    public function acceptApplicants()
    {
        $this->status = "ACCEPTED";
        $this->save();

        return $this->status;
    }

    public function rejectApplicants()
    {
        $this->status = "REJECTED";
        $this->save();

        return $this->status;
    }
}
