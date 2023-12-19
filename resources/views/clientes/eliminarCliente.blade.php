@extends('layouts.plantilla')

@section('titulo', 'editar cliente')
    
@section('contenido')
    
<main class="formMain">
<br>
    <div class="alert alert-danger" role="alert">
        ¿Estas seguro de eliminar este cliente?
    </div>

    <table class="tablaClientes"> 
        <thead>
            <th>Id</th>
            <th>nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Fecha de nacimiento</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </thead>
        <tbody>
            <tr>
                <th>{{ $cliente->id }}</th>
                <th>{{ $cliente->nombre }}</th>
                <th>{{ $cliente->apellido }}</th>
                <th>{{ $cliente->dni }}</th>
                <th>{{ $cliente->fecha_nacimiento }}</th>
                <th>{{ $cliente->direccion }}</th>
                <th>{{ $cliente->telefono }}</th>
            </tr>
        </tbody>
    </table>
    <hr>
    <form action="{{ route('destroyCliente', $cliente->id) }}" method="post">
        @csrf
        @method('delete')
        <a href="{{ route('indexCliente')}}" class="btn btn-info">Regresar</a>

        <button class="btn btn-danger">
            <span class="fas fa-user-times"></span> eliminar
        </button>
    </form>

</main>

@endsection