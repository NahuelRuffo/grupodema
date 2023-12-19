@extends('layouts.plantilla')

@section('titulo', 'pedido')
    
@section('contenido')
<main class="formMain">

    <h1>TODOS LOS PEDIDOS DE $cliente</h1>
    
        <a href="{{route('nuevoPedido')}}" type="button" class="btn btn-success" id="nuevoPedido">NUEVO PEDIDO </a>

        <table class="tablaClientes">
            <tr>
                <th scope="row">ID</th>
                <th>Fecha del pedido</th>
                <th>linea</th>
                <th>producto</th>
                <th>cantidad</th>
                <th>precio/u</th>
                <TH>total</TH>
                <th>Estado</th>
            </tr>

            @foreach ($pedido as $item)

                <tr>
                    <th>{{ $item->id_pedido }}</th>
                    <th>{{ $item->fecha_pedido }}</th>
                    <th>{{ $item->linea }}</th>
                    <th>{{ $item->producto }}</th>
                    <th>{{ $item->cantidad }}</th>
                    <th>{{ $item->precio_u }}</th>
                    <th>{{ $item->total }}</th>
                    <th>{{ $item->estado }}</th>
                </tr>

            @endforeach 

        </table>

        <div class="botonesPedidos">
            <a href="{{ route('editarPedido') }}" type="button" class="btn btn-secondary">EDITAR</a>
            <a href="#" type="button" class="btn btn-secondary">ENTREGA</a>
            <a href="#" type="button" class="btn btn-secondary">FACTURAR</a>
            <a href="{{ route('indexCliente')}}" class="btn btn-info">Regresar</a>
        </div>

</main>
@endsection
