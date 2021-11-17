@extends('principal')

@section('crear_doctor')
    <h2>CREAR DOCTOR</h2>

    <form method="post" action="{{ route('doctor.crear') }}">
        @csrf
        <input type="number" name="id" placeholder="Introduce el id del doctor...">
        <input type="text" name="nombre" placeholder="Introduce el nombre del doctor...">
        <input type="text" name="apellidos" placeholder="Introduce el apellido del doctor...">
        <input type="number" name="num_pacientes" placeholder="Introduce el número de pacientes del doctor...">
        
        <input type="submit" value="CREAR">
    </form>
@endsection