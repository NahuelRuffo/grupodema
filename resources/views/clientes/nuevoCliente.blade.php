@extends('layouts.plantilla')

@section('titulo', 'nuevo cliente')
    
@section('contenido')
    
    <main class="formMain">

        <h1>NUEVO CLIENTE</h1>

        <div class="formEditarCliente">
            <form action="{{ route('cliente.store') }}" method="POST">
                @csrf
                
                <div class="colum1">
        
                    <div class="form-floating mb-3">
                        <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="Nombre" required>
                        <label for="floatingInput">Nombre</label>
                    </div>

                    
                    <div class="form-floating mb-3">
                        <input type="text" name="apellido" class="form-control" id="floatingInput" placeholder="Apellido" required>
                        <label for="floatingInput">Apellido</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="dni" class="form-control" id="floatingInput" placeholder="Telefono" required>
                        <label for="floatingInput">DNI</label>
                    </div>
                </div>

                <div class="colum2">
                    <div class="form-floating mb-3">
                        <input type="date" name="fecha_nacimiento" class="form-control" id="floatingInput" placeholder="DNI" required>
                        <label for="floatingInput">fecha de nacimiento</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="direccion" class="form-control" id="floatingInput" placeholder="Direccion" required>
                        <label for="floatingInput">Direccion</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="telefono" class="form-control" id="floatingInput" placeholder="ID" required>
                        <label for="floatingInput">Telefono</label>
                    </div>    

                </div>

                <button class="btn btn-success">
                    <span class="fas fa-user-plus"></span> AGREGAR
                </button>
                
                <a href="{{ route("indexCliente") }}" class="btn btn-secondary">Regresar</a>
            
            </form>
        
        </div>

    </main>

@endsection
