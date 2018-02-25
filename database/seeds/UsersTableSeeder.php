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
            'password' => bcrypt('123456789'),
            'name'     => 'Administrador'
        ]);

        User::create([
            'nickname' => 'pavon',
            'password' => bcrypt('123456'),
            'name'     => 'Dr Néstor Pavón'
        ]);

        User::create([
            'nickname' => 'bravo',
            'password' => bcrypt('123456'),
            'name'     => 'Dra. Sugey Bravo'
        ]);

        User::create([
            'nickname' => 'recepcion',
            'password' => bcrypt('123456'),
            'name'     => 'Recepcion'
        ]);
    }
}
