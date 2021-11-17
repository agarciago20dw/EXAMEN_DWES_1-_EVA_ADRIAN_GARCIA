@extends('principal')

@section('editar_doctor')
    <h2>EDITAR DOCTOR</h2>

    <form method="post" action="{{ route('doctor.editar') }}">
        @csrf
        <input type="number" name="id" value="{{ $doctor->id }}">
        <input type="text" name="nombre" value="{{ $doctor->nombre }}">
        <input type="text" name="apellidos" value="{{ $doctor->apellidos }}">
        <input type="number" name="num_pacientes" value="{{ $doctor->num_pacientes }}">
        
        <input type="submit" value="EDITAR">
    </form>
@endsection