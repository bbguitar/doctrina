<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class DefaultRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'LMS Administrator'; // optional
        $admin->description  = 'User is allowed to access admin interface'; // optional
        $admin->save();

        $student = new Role();
        $student->name         = 'Student';
        $student->display_name = 'LMS Student';
        $student->description  = 'User is allowed to access course content'; // optional
        $student->save();

        $admin_user = User::where('name', '=', 'admin')->first();
        $admin_user->attachRole($admin);
        $admin_user->save();
    }
}
