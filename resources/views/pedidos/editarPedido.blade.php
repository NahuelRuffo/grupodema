@extends('layouts.plantilla')

@section('titulo', 'editar pedido')
    
@section('contenido')
    
<main class="formMain">

    <h1>EDITAR PEDIDO</h1>
    
        <table class="tablaClientes">
            <tr>
                <th scope="row">ID</th>
                <th>linea</th>
                <th>producto</th>
                <th>cantidad</th>
                <th>precio/u</th>
                <TH>total</TH>
            </tr>
            <tr>
                <th>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </th>
                <th>
                    <select class="form-select form-select-sm" aria-label="Small select example" id="select">
                        <option selected>Seleccione la linea</option>
                        <option value="1">Sigas</option>
                        <option value="2">Acqua</option>
                    </select>
                </th>
                <th>
                    <select class="form-select form-select-sm" aria-label="Small select example" id="select">
                        <option selected>Seleccione producto</option>
                        <option value="1">Sigas</option>
                        <option value="2">Acqua</option>
                    </select>
                </th>
                <th>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </th>
                <th>xxxxx</th>
                <th>xxxxx</th>
            </tr>

        </table>

        <div class="botonesPedidos">
            <a href="#" type="button" class="btn btn-success">GUARDAR</a>
            <a href="{{ route('pedidoCliente')}}" class="btn btn-info">Regresar</a>

        </div>

</main>




@endsection
