<?php

use App\Http\Controllers\pedidosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\stokController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [indexController::class, 'Home']);




Route::controller(clientesController::class)->group(function(){
    Route::get('clientes', 'indexCliente')-> name('indexCliente')->middleware('auth');
    Route::get('clientes/nuevoCliente', 'nuevoCliente')-> name('nuevoCliente')->middleware('auth');
    Route::get('clientes/editarCliente/{id}', 'editarCliente')-> name('editarCliente')->middleware('auth');
    Route::PUT('clientes/update/{id}', 'update')-> name('updateCliente')->middleware('auth');
    Route::get('clientes/eliminarCliente/{id}', 'eliminarCliente')-> name('eliminarCliente')->middleware('auth');
    Route::post('clientes/store', 'store')-> name('cliente.store')->middleware('auth');
    route::delete('clientes/destroy/{id}', 'destroy')->name('destroyCliente')->middleware('auth');
});


Route::controller(pedidosController::class)->group(function(){
    Route::get('pedidos', 'pedidoCliente')-> name('pedidoCliente')->middleware('auth');;
    Route::get('pedidos/nuevoPedido', 'nuevoPedido')-> name('nuevoPedido')->middleware('auth');
    Route::post('pedidos/store', 'store')-> name('pedido.store')->middleware('auth');
    Route::get('pedidos/editarPedido', 'editarPedido')-> name('editarPedido')->middleware('auth');
});


Route::controller(stokController::class)->group(function(){
    Route::get('stock', 'stock')-> name('stock')->middleware('auth');
    Route::get('stock/materiaPrima', 'materiaPrima')-> name('materiaPrima')->middleware('auth');
});



