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
        <td>{{ $estudiante->nombre }}</td>
    </tr>
    <tr>
        <td>Descripción:</td>
        <td>{{ $estudiante->curso }}</td>
    </tr>
    <tr>
        <td>Nota 1:</td>
        <td>{{ $estudiante->nota1 }}</td>
    </tr>
    <tr>
        <td>Nota 2:</td>
        <td>{{ $estudiante->nota2 }}</td>
    </tr>
    <tr>
        <td>Promedio:</td>
        <td>{{ $estudiante->promedio }}</td>
    </tr>
    <tr>
        <td>Condicion:</td>
        <td>{{ $estudiante->condicion }}</td>
    </tr>
    <tr>
        <td>Fecha de registro:</td>
        <td>{{ $estudiante->fecha_de_registro }}</td>
    </tr>
</table>
@endsection
