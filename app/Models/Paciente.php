<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';
    protected $fillable = [
        'id',
        'nombre',
        'apellidos',
        'dni',
        'fecha_nacimiento',
        'vacunado',
        'doctor_id',
    ];
}
