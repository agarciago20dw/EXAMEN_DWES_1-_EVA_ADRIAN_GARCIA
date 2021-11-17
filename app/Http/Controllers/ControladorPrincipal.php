<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Paciente;

class ControladorPrincipal extends Controller
{
    public function listarDoctores() {
        return view('listar_doctores')->with('doctores', Doctor::all());
    }

    public function crearPacienteFormulario() {
        return view('crear_paciente');
    }

    public function crearPaciente(Request $request) {
        // CÓDIGO CREAR PACIENTE
        $paciente = new Paciente;
        $paciente->id = $request->get('id');
        $paciente->nombre = $request->get('nombre');
        $paciente->apellidos = $request->get('apellidos');
        $paciente->dni = $request->get('dni');
        $paciente->fecha_nacimiento = $request->get('fecha_nac');

        if ($request->get('vacunado') == 1) {
            $paciente->vacunado = true;
        }
        else {
            $paciente->vacunado = false;
        }
        $paciente->save();

        return view('crear_paciente');
    }

    public function eliminarDoctor($id) {
        $doctor = Doctor::find($id);
        $doctor->delete();

        $pacientes = Paciente::where('doctor_id', $id);

        foreach ($pacientes as $paciente) {
            $paciente->doctor_id = null;
        }

        return redirect('/');
    }

    public function editarDoctorFormulario($id) {
        $doctor = Doctor::find($id);
        return view('editar_doctor')->with('doctor', $doctor);
    }

    public function crearDoctorFormulario() {
        return view('crear_doctor');
    }

    public function crearDoctor(Request $request) {
        // CÓDIGO CREAR PACIENTE
        $doctor = new Doctor;
        $doctor->id = $request->get('id');
        $doctor->nombre = $request->get('nombre');
        $doctor->apellidos = $request->get('apellidos');
        $doctor->num_pacientes = $request->get('num_pacientes');

        $doctor->save();

        return redirect('/');
    }

    public function editarDoctor(Request $request) {
        // CÓDIGO CREAR PACIENTE
        $doctor = Doctor::find($request->id);
        $doctor->id = $request->get('id');
        $doctor->nombre = $request->get('nombre');
        $doctor->apellidos = $request->get('apellidos');
        $doctor->num_pacientes = $request->get('num_pacientes');

        $doctor->save();

        return redirect('/');
    }
}
