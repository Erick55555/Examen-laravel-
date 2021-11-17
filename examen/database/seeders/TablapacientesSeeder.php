<?php

namespace Database\Seeders;

use App\Models\paciente;
use Database\Factories\pacienteFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablapacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'nombre' => 'erick',
            'apellidos' => 'ibanez',
            'dni' => '123456789',
            'fecha_nacimiento' => '29/11/2001',
            'vacunado' => 'true',
            'doctor_id' => '1',
        ]);
        DB::table('pacientes')->insert([
            'nombre' => 'adrian',
            'apellidos' => 'antonio',
            'dni' => '987654321',
            'fecha_nacimiento' => '27/10/2001',
            'vacunado' => 'false',
            'doctor_id' => '2',
        ]);
        DB::table('pacientes')->insert([
            'nombre' => 'unai',
            'apellidos' => 'corzo',
            'dni' => '246813579',
            'fecha_nacimiento' => '20/11/2002',
            'vacunado' => 'true',
            'doctor_id' => '1',
        ]);
        DB::table('pacientes')->insert([
            'nombre' => 'leire',
            'apellidos' => 'garmendia',
            'dni' => '135792468',
            'fecha_nacimiento' => '15/12/2001',
            'vacunado' => 'true',
            'doctor_id' => '2',
        ]);

        paciente::factory(100)->make();
    }
}
