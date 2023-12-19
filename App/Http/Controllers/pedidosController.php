<?php

namespace App\Http\Controllers;

use App\Models\pedidos;
use Illuminate\Http\Request;

class pedidosController extends Controller
{
    public function pedidoCliente(){
        $lista=["agua","gas"];
        $productoAgua=["20","25","40"];
        $productoGas=["20","25","40","50","63"];        
        $pedido = pedidos::all();
        return view('pedidos.pedidoCliente', compact('pedido','lista','productoAgua','productoGas'));
    }


    public function editarPedido(){
        $lista=["agua","gas"];
        $productoAgua=["20","25","40"];
        $productoGas=["20","25","40","50","63"]; 
        return view('pedidos.editarPedido', compact('lista','productoAgua','productoGas'));
    }

    

    public function nuevoPedido(){
        $lista=["agua","gas"];
        $productoAgua=["20","25","40"];
        $productoGas=["20","25","40","50","63"]; 
        return view('pedidos.nuevoPedido', compact('lista','productoAgua','productoGas'));
    }

    public function store(Request $request){
        $pedido = new pedidos();
        $pedido->id_pedido = $request->post('id_pedido');
        $pedido->fecha_pedido = $request->post('fecha_pedido');
        $pedido->linea = $request->post('linea');
        $pedido->producto = $request->post('producto');
        $pedido->cantidad = $request->post('cantidad');
        $pedido->precio_u = $request->post('precio_u');
        $pedido->total = $request->post('total');
        $pedido->estado = $request->post('estado');
        $pedido->save();

        return redirect()->route("pedidoCliente")->with("success", "¡Agregado con exito!");
    }
}
