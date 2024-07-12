@extends('layout')
@section('title','Estudiantes')
@section('content')
<h2>Estudiantes</h2>
<tr>
    <td colspan="4">
    <a href="{{ route('estudiantes.create') }}">Nuevo Estudiante</a>

    </td>
</tr>
<tr>
    <th colspan="4">Listado de Estudiantes</th>
</tr>
@if ($estudiantes)
    @foreach($estudiantes as $estudiante)
        <tr>
            <td colspan="4">
                <a href="{{ route('estudiantes.show', $estudiante) }}">{{ $estudiante->nombre }}</a>
            </td>
        </tr>

@endforeach
@else
<li>No existe ningun estudiante que mostrar</li>
@endif
</ul>
@endsection