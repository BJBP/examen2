@extends('layout')

@section('title', 'Crear Estudiante')
@section('content')

<table cellpadding="3" cellspacing="5">
    <tr>
        <th colspan="4">Crear nuevo estudiante</th>
    </tr>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

    <form action="{{ route('estudiantes.store') }}" method="post">
        @csrf
        <tr>
            <th>nombre</th>
            <td><input type="text" name="nombre"><br>{{$errors->first('nombre')}}</td>
        </tr>
        <tr>
            <th>curso</th>
            <td><input type="text" name="curso"><br>{{$errors->first('curso')}}</td>
        </tr>
        <tr>
            <th>nota1</th>
            <td><input type="text" name="nota1"><br>{{$errors->first('nota1')}}</td>
        </tr>
        <tr>
            <th>nota2</th>
            <td><input type="text" name="nota2"><br>{{$errors->first('nota2')}}</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>

@endsection
