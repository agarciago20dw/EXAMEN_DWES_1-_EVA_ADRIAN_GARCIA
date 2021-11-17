@extends('principal')

@section('crear_paciente')
    <h2>CREAR PACIENTE</h2>

    <form method="post" action="{{ route('pacientes.crear') }}">
        @csrf
        <input type="number" name="id" placeholder="Introduce el id del paciente...">
        <input type="text" name="nombre" placeholder="Introduce el nombre del paciente...">
        <input type="text" name="apellidos" placeholder="Introduce el apellido del paciente...">
        <input type="text" name="dni" placeholder="Introduce el dni del paciente...">
        <input type="date" name="fecha_nac" placeholder="Introduce la fecha de nacimiento del paciente...">
        <label for="vacunado">Marca la casilla si el paciente está vacunado</label>
        <input type="checkbox" name="vacunado" id="">
        
        <input type="submit" value="CREAR">
    </form>
@endsection