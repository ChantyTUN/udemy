<?php

use Illuminate\Database\Seeder;

use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $admin = new User();
        $admin->name ="admin";
        $admin->email ="adminchanty@gmail.com";
        $admin->email_verified_at =NOW();
        $admin->password =bcrypt('password');
        $admin->visible_password ="password";
        $admin->occupation ="Programming Development";
        $admin->address ="Kandal, Cambodia";
        $admin->phone ="087881427";
        $admin->is_admin =1;
        $admin->save();
    }
}
