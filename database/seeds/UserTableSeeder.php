<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::truncate();

        User::create([
            'email' => 'james_liang@migocorp.com',
            'password' => bcrypt('admin156*'),
            'name' => 'admin',
            'admin'=> true,
        ]);
    }
}