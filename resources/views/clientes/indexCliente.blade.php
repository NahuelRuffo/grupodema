@extends('layouts.plantilla')

@section('titulo', 'clientes')
    
@section('contenido')

<main class="formMain">

    <h1>CLIENTES</h1>

    <div class="row">
        <div class="col-sm-12">
            @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
            @endif
        </div>
    </div>

    <a href="{{route('nuevoCliente')}}" type="button" class="btn btn-success" id="nuevoCliente">NUEVO CLIENTE</a>

    <table class="tablaClientes">
        <thead>
            <tr>
                <th scope="row">Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Fecha de nacmiento</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Editar</th>
                <th>Pedidos</th>
                <th>Eliminar</th>
            </tr>
        </thead>

    @foreach ($datos as $item)
        
        <tr>
            <th>{{ $item->id }}</th>
            <th>{{ $item->nombre }}</th>
            <th>{{ $item->apellido }}</th>
            <th>{{ $item->dni }}</th>
            <th>{{ $item->fecha_nacimiento }}</th>
            <th>{{ $item->direccion }}</th>
            <th>{{ $item->telefono }}</th>
            <th>
                <form action="{{route("editarCliente", $item->id) }}" method="get">
                    <button class="btn btn-warning btn-sm">
                        <span class="fas fa-user-edit"></span>
                    </button>
                </form>
            </th>
            <th>
                <form action="{{ route("pedidoCliente", $item->id) }}" method="get">
                    <button class="btn btn-warning btn-sm">
                        <span class="fa-solid fa-cart-shopping"></span>
                    </button>
                </form>
            </th>
            <th>
                <form action="{{ route("eliminarCliente", $item->id) }}" method="get" >
                    <button class="fa-solid fa-trash">
                        <span ></span>
                    </button>
                </form>
            </th>
        </tr>

    @endforeach 

    </table>


</main>
<br>
@endsection
