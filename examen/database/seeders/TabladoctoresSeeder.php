<?php

namespace Database\Seeders;

use App\Models\doctor;
use Database\Factories\doctorFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabladoctoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctores')->insert([
            'nombre' => 'erick',
            'apellidos' => 'ibanez',
            'num_pacientes' => '2',
        ]);
        DB::table('doctores')->insert([
            'nombre' => 'adrian',
            'apellidos' => 'perez',
            'num_pacientes' => '3',
        ]);

        doctor::factory(5)->make();
    }
}
