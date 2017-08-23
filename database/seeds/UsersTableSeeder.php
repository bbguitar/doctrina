<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin_user = new User([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password123'),
            ]);
        $admin_user->save();
    }
}
