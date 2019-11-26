<?php

use Illuminate\Database\Seeder;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applicant = new \App\Applicant;
        $applicant->vacancy_id = 12;
        $applicant->user_id = 4;
        $applicant->motivation_letter = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem ab iure possimus, explicabo non mollitia sit? Facilis nobis impedit rem beatae tempora odit et ducimus? Delectus ea deleniti voluptatem eum!";
        $applicant->status = "PROCESSED";
        $applicant->experience = 6;
        $applicant->resume = "belum ada";

        $applicant->save();
        $this->command->info("berhasil memasukkan applicants");
    }
}
