@extends('layouts.plantilla')

@section('titulo', 'nuevo pedido')
    
@section('contenido')

    <main class="formMain">

        <h1>NUEVO PEDIDO</h1>

        <div class="formEditarCliente">
            <form action="{{ route('pedido.store') }}" method="POST">
                @csrf

                <div class="colum1">

                    <div>
                        <label for="">id pedido</label>
                        <input type="text" name="id_pedido" class="form-control" required>
                    </div>

                    <div>
                        <label for="">fecha de pedido</label>
                        <input type="date" name="fecha_pedido" class="form-control" required>
                    </div>

                    <div>
    <label for="">Linea</label>
    <select id="linea" class="form-control">
        @foreach ($lista as $producto)  
            <option>{{ $producto }}</option>
        @endforeach   
    </select>   
</div>

<div>
    <label for="">Producto</label>
    <select id="producto" class="form-control">
    </select>
</div>
<script> window.onload = function() {
    var lineaSelect = document.getElementById('linea');
    var productoSelect = document.getElementById('producto');

    var productoAgua = ["20","25","40"];
    var productoGas = ["20","25","40","50","63"];

    lineaSelect.addEventListener('change', function() {
        // Limpiar el select de producto
        productoSelect.innerHTML = "";

        // Elegir el array correcto
        var productos = this.value == 'agua' ? productoAgua : productoGas;

        // Llenar el select de producto
        for (var i = 0; i < productos.length; i++) {
            var option = document.createElement('option');
            option.text = productos[i];
            productoSelect.add(option);
        }
    });

    // Disparar el evento change para llenar el select de producto inicialmente
    lineaSelect.dispatchEvent(new Event('change'));
};
</script>

                </div>
        
                <div class="colum2">
                    
                    <div>
                        <label for="">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control" required>
                    </div>

                    <div>
                        <label for="">Precio/u</label>
                        <input type="text" name="precio_u" class="form-control" required>
                    </div>

                    <div>
                        <label for="">total</label>
                        <input type="text" name="total" class="form-control" required>
                    </div>

                    <div>
                        <label for="">estado</label>
                        <input type="text" name="estdo" class="form-control" required>
                    </div>

                </div>
                <br>
                <button class="btn btn-success">
                    <span class="fas fa-user-plus"></span> AGREGAR
                </button>
                
                <a href="{{ route("pedidoCliente") }}" class="btn btn-secondary">Regresar</a>
            </form>
        </div>

</main>
<br>
@endsection
