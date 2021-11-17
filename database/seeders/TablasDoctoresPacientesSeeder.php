<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Paciente;

class TablasDoctoresPacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor1 = new Doctor;
        $doctor1->id = 1;
        $doctor1->nombre = 'Paco';
        $doctor1->apellidos = 'Giménez';
        $doctor1->num_pacientes = 5;
        $doctor1->save();

        $doctor2 = new Doctor;
        $doctor2->id = 2;
        $doctor2->nombre = 'María';
        $doctor2->apellidos = 'Pérez';
        $doctor2->num_pacientes = 8;
        $doctor2->save();



        $paciente1 = new Paciente;
        $paciente1->id = 1;
        $paciente1->nombre = 'Gorka';
        $paciente1->apellidos = 'Larrañaga';
        $paciente1->dni = '11111111A';
        $paciente1->fecha_nacimiento = '2000-01-01';
        $paciente1->vacunado = true;
        $paciente1->doctor_id = Doctor::all()->random()->id;
        $paciente1->save();

        $paciente2 = new Paciente;
        $paciente2->id = 2;
        $paciente2->nombre = 'Erick';
        $paciente2->apellidos = 'Ibañez';
        $paciente2->dni = '22222222B';
        $paciente2->fecha_nacimiento = '2000-02-02';
        $paciente2->vacunado = true;
        $paciente2->doctor_id = Doctor::all()->random()->id;
        $paciente2->save();

        $paciente3 = new Paciente;
        $paciente3->id = 3;
        $paciente3->nombre = 'Leire';
        $paciente3->apellidos = 'Garmendia';
        $paciente3->dni = '33333333C';
        $paciente3->fecha_nacimiento = '2000-03-03';
        $paciente3->vacunado = true;
        $paciente3->doctor_id = Doctor::all()->random()->id;
        $paciente3->save();

        $paciente4 = new Paciente;
        $paciente4->id = 4;
        $paciente4->nombre = 'Adrián';
        $paciente4->apellidos = 'García';
        $paciente4->dni = '44444444D';
        $paciente4->fecha_nacimiento = '2000-04-04';
        $paciente4->vacunado = true;
        $paciente4->doctor_id = Doctor::all()->random()->id;
        $paciente4->save();
    }
}
