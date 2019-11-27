<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }
}
