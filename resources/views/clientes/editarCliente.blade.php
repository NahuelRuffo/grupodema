@extends('layouts.plantilla')

@section('titulo', 'editar cliente')
    
@section('contenido')
    
<main class="formMain">

    <h1>EDITAR CLIENTE</h1>

    
    <div class="formEditarCliente">

        <form action="{{ route('updateCliente', $cliente->id) }}" method="POST">
                @csrf
                @method("PUT")

            <div class="colum1">                
                <div class="form-floating mb-3">
                    <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="fecha nacimiento" required value="{{$cliente->nombre}}">
                    <label for="floatingInput">Nombre</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="apellido" class="form-control" id="floatingInput" placeholder="Telefono" required value="{{$cliente->apellido}}">
                    <label for="floatingInput">apellido</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="dni" class="form-control" id="floatingInput" placeholder="DNI" required value="{{$cliente->dni}}">
                    <label for="floatingInput">dni</label>
                </div>
            </div>

            <div class="colum2">
                

                <div class="form-floating mb-3">
                    <input type="date" name="fecha_nacimiento" class="form-control" id="floatingInput" placeholder="Direccion" required value="{{$cliente->fecha_nacimiento}}">
                    <label for="floatingInput">Fecha nacimiento</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="direccion" class="form-control" id="floatingInput" placeholder="ID" required value="{{$cliente->direccion}}">
                    <label for="floatingInput">Direccion</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="telefono" class="form-control" id="floatingInput" placeholder="ID" required value="{{$cliente->telefono}}">
                    <label for="floatingInput">Telefono</label>
                </div>
            </div>

            <button class="btn btn-success" id="botonGuardar">
                <span></span>GUARDAR
            </button>

            <a href="{{ route("indexCliente") }}" class="btn btn-secondary">REGRESAR</a>

        </form>
    </div>
    

</main>

@endsection