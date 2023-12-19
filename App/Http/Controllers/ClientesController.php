<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function indexCliente()
    {
        $datos = Cliente::all();
        return view('clientes.indexCliente', compact('datos'));
    }

    public function editarCliente($id){
        $cliente = cliente::find($id);
        return view('clientes.editarCliente', compact('cliente'));
    }

    

    public function eliminarCliente($id){
        $cliente = cliente::find($id);
        return view('clientes.eliminarCliente', compact('cliente'));

    }

    public function nuevoCliente(){
        return view('clientes.nuevoCliente');
    }

    public function store(Request $request){
        $cliente = new cliente();
        $cliente->id = $request->post('id');
        $cliente->nombre = $request->post('nombre');
        $cliente->apellido = $request->post('apellido');
        $cliente->dni = $request->post('dni');
        $cliente->fecha_nacimiento = $request->post('fecha_nacimiento');
        $cliente->direccion = $request->post('direccion');
        $cliente->telefono = $request->post('telefono');
        $cliente->save();

        return redirect()->route("indexCliente")->with("success", "¡Agregado con exito!");
    }

    public function update(Request $request, $id)
    {
        $cliente = cliente::find($id);

        $cliente->nombre = $request->post('nombre');
        $cliente->apellido = $request->post('apellido');
        $cliente->dni = $request->post('dni');
        $cliente->fecha_nacimiento = $request->post('fecha_nacimiento');
        $cliente->direccion = $request->post('direccion');
        $cliente->telefono = $request->post('telefono');
        $cliente->save();

        return redirect()->route("indexCliente")->with("success", "¡Actualizado con exito!");
    }

    public function destroy($id){
        $cliente = cliente::find($id);
        $cliente->delete();
        return redirect()->route("indexCliente")->with("success", "eliminado con exito!");
    }
}
