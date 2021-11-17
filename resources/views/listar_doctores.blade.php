@extends('principal')

@section('listar_doctores')
    <h2>LISTAR DOCTORES</h2>

    <table>
    @foreach ($doctores as $doctor)
        <tr>
            <td class="p-3 d-flex justifi-content-around gap-3">
                {{ $doctor->nombre }}
                <button><a href="{{ route('doctor.eliminar', $doctor->id) }}" style="text-decoration: none; color: black;">Eliminar</a></button>
                <button><a href="{{ route('doctor.editar.formulario', $doctor->id) }}" style="text-decoration: none; color: black;">Editar</a></button>
            </td>
        </tr>
    @endforeach
    </table>
@endsection
