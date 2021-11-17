<?php

namespace Database\Seeders;

use App\Models\doctor;
use App\Models\paciente;
use Database\Factories\doctorFactory;
use Database\Factories\pacienteFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TabladoctoresSeeder::class);
        $this->call(TablapacientesSeeder::class);
    }
}
