<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = "Administrator";
        $admin->email = "admin@hireme.test";
        $admin->roles = json_encode(["ADMIN"]);
        $admin->password = \Hash::make('adminhireme');
        $admin->description = "This is Admin account";

        $admin->save();

        $this->command->info("Admin successfully added!");
    }
}
