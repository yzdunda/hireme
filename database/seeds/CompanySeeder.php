<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new \App\Company;
        $company->name = "Bukalapak";
        $company->email = "bukalapak@mail.com";
        $company->password = \Hash::make("bukalapak");
        $company->description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur fugiat quisquam fugit magnam, amet itaque ad suscipit quod, enim beatae veritatis et vitae mollitia vel, consectetur corrupti placeat laborum nisi.";
        $company->website = "Bukalapak.com";
        $company->address = "Jakarta Pusat";

        $company->save();
        $this->command->info("Berhasil memasukan company.");
    }
}
