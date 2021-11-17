@extends('principal')

@section('asignar')
    <h2>ASIGNAR PACIENTE A DOCTOR</h2>

    <div class="row">
        <div class="col-6">
            <table>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>
                            {{ $paciente->nombre }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-6">
            <table>
                @foreach ($doctores as $doctor)
                    <tr>
                        <td>
                            {{ $doctor->nombre }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection