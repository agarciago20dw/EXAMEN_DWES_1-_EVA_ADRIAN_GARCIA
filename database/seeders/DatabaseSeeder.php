<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Paciente;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TablasDoctoresPacientesSeeder::class);
        Doctor::factory(5)->make();
        Paciente::factory(100)->make();
    }
}
