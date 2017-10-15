<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nickname' => 'admin',
            'password' => bcrypt('123456'),
            'email'    => 'admin@admin.com',
            'name'     => 'Admin'
        ]);
    }
}
