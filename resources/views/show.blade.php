@extends('layout')

@section('title', 'Detalle del Estudiante')

@section('content')
<h2>Estudiantes</h2>
<table>
    <tr>
        <th colspan="4">Detalle de Estudiantes</th>
    </tr>
    <tr>
        <td>Titulo:</td>
        <td>{{ $estudiante->titulo }}</td>
    </tr>
    <tr>
        <td>Descripción:</td>
        <td>{{ $estudiante->descripcion }}</td>
    </tr>
</table>
@endsection
