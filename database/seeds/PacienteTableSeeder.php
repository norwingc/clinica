<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Paciente;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Paciente::truncate();

        foreach (range(1, 50) as $key => $value) {
            Paciente::create([
                'name'      => $faker->name,
                'id_number' => $faker->unique()->creditCardNumber,
                'email'     => $faker->unique()->email,
                'address'   => $faker->address,
                'phone'     => $faker->phoneNumber
            ]);
        }
    }
}
