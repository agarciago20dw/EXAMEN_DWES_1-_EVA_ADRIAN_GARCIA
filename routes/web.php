<?php

use App\Http\Controllers\ControladorPrincipal;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ControladorPrincipal::class, 'listarDoctores'])->name('doctores.mostrar');

Route::get('/paciente/crear', [ControladorPrincipal::class, 'crearPacienteFormulario'])->name('pacientes.crear.formulario');

Route::post('/paciente/crear', [ControladorPrincipal::class, 'crearPaciente'])->name('pacientes.crear');

Route::get('/doctor/eliminar/{id}', [ControladorPrincipal::class, 'eliminarDoctor'])->name('doctor.eliminar');

Route::get('/doctor/editar/{id}', [ControladorPrincipal::class, 'editarDoctorFormulario'])->name('doctor.editar.formulario');

Route::post('/doctor/editar', [ControladorPrincipal::class, 'editarDoctor'])->name('doctor.editar');

Route::get('/doctor/crear', [ControladorPrincipal::class, 'crearDoctorFormulario'])->name('doctor.crear.formulario');

Route::post('/doctor/crear', [ControladorPrincipal::class, 'crearDoctor'])->name('doctor.crear');
