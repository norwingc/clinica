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

        foreach (range(1, 100) as $key => $value) {
            Paciente::create([
                'name'             => $faker->name,
                'id_number'        => $faker->unique()->creditCardNumber,
                'referido'         => $faker->name,
                'email'            => $faker->unique()->email,
                'birthday'         => $faker->date($format = 'Y-m-d', $max = 'now'),
                'convencional'     => $faker->phoneNumber,
                'celular'          => $faker->phoneNumber,
                'address'          => $faker->address,
                'contacto'         => $faker->name,
                'parentesco'       => $faker->word,
                'contacto_celular' => $faker->phoneNumber,
                'trabajo'          => $faker->jobTitle,
                'escolaridad'      => 'Secundaria'
            ]);
        }
    }
}
